<?php 

$produtos_api = Requisicao::requisicaoProdutos();
$lista_de_produtos = Produto::verificaRetornaArrayProdutos($produtos_api);
