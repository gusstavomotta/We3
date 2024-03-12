<?php

require_once __DIR__ . "/../models/Requisicao.php";
require_once __DIR__ . "/../models/Produto.php";

function listarProdutos()
{
    $produtos = Requisicao::requisicaoProdutos();
    $lista_de_produtos = Produto::verificaRetornaArrayProdutos($produtos);
    $lista_filtrada = [];

    foreach ($lista_de_produtos as $produtos){
        if($produtos->getPreco() == 20 
        || $produtos->getPreco() == 50 
        || $produtos->getPreco() == 100){
            
            array_push($lista_filtrada, $produtos);
        }
    }
    return $lista_filtrada;
}

function retornaProdutoPorId(array $lista_produtos, string $id){

    foreach ($lista_produtos as $produto){
        if($produto->getIdProduto() == $id){
            return $produto;
        }   
    }
    return false;
}
