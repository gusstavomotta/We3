<?php

require_once __DIR__ . "/../models/Requisicao.php";
require_once __DIR__ . "/../models/Produto.php";

function filtrar_produtos()
{
    $produtos = Requisicao::requisicao_produtos();
    $lista_de_produtos = Produto::verifica_retorna_array_produtos($produtos);
    $lista_filtrada = [];

    foreach ($lista_de_produtos as $produtos) {
        if (
            $produtos->get_preco() == 20
            || $produtos->get_preco() == 50
            || $produtos->get_preco() == 100
        ) {

            array_push($lista_filtrada, $produtos);
        }
    }
    return $lista_filtrada;
}

function retorna_produto_por_id(array $lista_produtos, string $id)
{

    foreach ($lista_produtos as $produto) {
        if ($produto->get_id_produto() == $id) {
            return $produto;
        }
    }
    return false;
}

function retorna_carrinho_de_compras_sessao()
{

    if (isset($_POST['produto'])) {
        $produtosSelecionados = $_POST['produto'];
    }

    if (!isset($_SESSION['produtos'])) {
        $_SESSION['produtos'] = array();
    }

    $listaProdutos = filtrar_produtos();
    $produto = (retorna_produto_por_id($listaProdutos, $produtosSelecionados));

    $_SESSION['produtos'][] = $produto;
    //var_dump($_SESSION['produtos']);

    return $_SESSION['produtos'];
}
