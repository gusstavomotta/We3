<?php
require __DIR__ . "/../Controller/carrinhoController.php";
require __DIR__ . "/../models/Produto.php";


session_start();

$id_produto = $_POST['produto'];

foreach ($_SESSION['produtos'] as $produtos) {
    var_dump($produtos);
}

$_SESSION['produtos'] = remover_produto_do_carrinho($_SESSION['produtos'], $id_produto);
header("Location: ../views/carrinhoDeCompras.php");
