<?php
require __DIR__ . "/../Controller/carrinhoController.php";
require __DIR__ . "/../Controller/produtoController.php";
require_once __DIR__ . "/../models/Carrinho.php";

session_start();

if (isset($_POST['produto'])) {
    $produtosSelecionados = $_POST['produto'];
}

if (!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = array();
}

foreach ($produtosSelecionados as $produtos) {

    $id = pegaIdString($produtos);
    $listaProdutos = listarProdutos();
    $produto = (retornaProdutoPorId($listaProdutos, $id));

    $_SESSION['produtos'][] = $produto;
}
// foreach ($_SESSION['produtos'] as $produto) {
//     print_r($produto);
// }

$produtos_carrinho = $_SESSION['produtos'];
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
            foreach ($produtos_carrinho as $produto) {
                $carro = criarCarrinho($produto);
            }

            print("Quantidade de produtos: " . $carro->contarQtdProdutos());
            print("<br>");
            print("Subtotal: " . $carro->somarSubtotal());
            print("<br>");

            $lista = $carro->getCarrinho();

            foreach ($produtos_carrinho as $produto) {
            ?>
                <div class="grid">
                    <div class="item">
                        <?php
                        print("Descrição do produto: " . $produto->getDscProduto());
                        print("<br>");
                        print("Preço do produto: " . $produto->getPreco());
                        print("<br>");
                        ?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    </p>
    <a href="/views/blistaDeProdutos.php">Continuar Comprando</a>
</body>

</html>