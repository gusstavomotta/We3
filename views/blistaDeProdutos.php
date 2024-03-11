<?php 
require "/home/imply/Documentos/GitHub/We3/models/Produto.php";
require "/home/imply/Documentos/GitHub/We3/models/Requisicao.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de produtos</title>
</head>

<body>
    <h1>Lista de produtos</h1>
    <h3>
        <?php
        $produtos_api = Requisicao::requisicaoProdutos();
        $lista_de_produtos = Produto::verificaRetornaArrayProdutos($produtos_api);

        foreach ($lista_de_produtos as $produto) {
            if (
                $produto->getPreco() == 20 
                || $produto->getPreco() == 50 
                || $produto->getPreco() == 100 
                || $produto->getPreco() == 80 
                || $produto->getPreco() == 10){
                    echo "<br>";
                    print_r($produto->__toString());
                    echo "<br>";

                }
        }
        ?>
    </h3>
</body>

</html>