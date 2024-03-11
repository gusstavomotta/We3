<?php
require "/home/imply/Documentos/GitHub/We3/models/Requisicao.php";
require "/home/imply/Documentos/GitHub/We3/models/Produto.php";
function listar_produtos()
{
    $produtos_api = Requisicao::requisicaoProdutos();
    $lista_de_produtos = Produto::verificaRetornaArrayProdutos($produtos_api);

    foreach ($lista_de_produtos as $produto) {
        echo "<br>";
        var_dump($produto->__toString());
        echo "<br>";
    }
}
