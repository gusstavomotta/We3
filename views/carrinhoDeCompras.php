<?php
require __DIR__ . "/../Controller/carrinhoController.php";
require __DIR__ . "/../Controller/produtoController.php";
require_once __DIR__ . "/../models/Carrinho.php";

session_start();

if (isset($_POST['produto'])) {
    $produtosSelecionados = $_POST['produto'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Carrinho de Compras</title>
</head>

<body>
    <h1> Carrinho </h1>
    <p>
        <?php
        $carrinho = array();
        foreach ($produtosSelecionados as $produtos) {

            $id = pegaIdString($produtos);
            $listaProdutos = listarProdutos();
            $produto = (retornaProdutoPorId($listaProdutos, $id));

            array_push($carrinho, $produto);
        }
        ?>
    <div class="grid">
        <div class="item">
            <?php
            print_r($carrinho);
            $carrinho_compras = criarCarrinho($carrinho);
            ?>
        </div>
    </div>

    </p>
    <a href="/views/blistaDeProdutos.php">Continuar Comprando</a>
</body>

</html>