<?php

require_once __DIR__ . "/../models/Requisicao.php";
require_once __DIR__ . "/../models/Produto.php";

function listarProdutos()
{
    $produtos = Requisicao::requisicaoProdutos();
    $lista_de_produtos = Produto::verificaRetornaArrayProdutos($produtos);
    
    return $lista_de_produtos;
}

function retornaProdutoPorId(array $lista_produtos, string $id){

    foreach ($lista_produtos as $produto){
        if($produto->getIdProduto() == $id){
            return $produto;
        }   
    }
    return false;
}
