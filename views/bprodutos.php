<?php 

$produtos_api = Requisicao::requisicaoProdutos();
$lista_de_produtos = Produto::verificaRetornaArrayProdutos($produtos_api);

foreach ($lista_de_produtos as $produto){
    var_dump($produto->__toString());
}