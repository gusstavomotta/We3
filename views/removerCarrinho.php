<?php
require __DIR__ . "/../Controller/carrinhoController.php";
require __DIR__ . "/../models/Produto.php";


session_start();

$id_produto = $_POST['produto'];
$array = array();

foreach ($_SESSION['produtos'] as $produtos) {

    array_push($array, $produtos);
}


$_SESSION['produtos'] = remover_produto_do_carrinho($array, $id_produto);
header("Location: ../views/carrinhoDeCompras.php");
