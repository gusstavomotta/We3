<?php
require __DIR__ . "/../models/Requisicao.php";
require __DIR__ . "/../models/Produto.php";

function listar_produtos()
{
    $produtos_api = Requisicao::requisicaoProdutos();
    $lista_de_produtos = Produto::verificaRetornaArrayProdutos($produtos_api);

    foreach ($lista_de_produtos as $produto) {
        echo "<br>";
        print_r("Preço do produto: " . $produto->getPreco());
        print_r("Descrição do produto: " . $produto->getDscProduto());
        echo "<br>";
    }
}
