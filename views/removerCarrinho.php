<?php
require __DIR__ . "/../Controller/carrinhoController.php";

session_start();

$id_produto = $_POST['produto'];
$produtos = $_SESSION['produtos'];

var_dump($produtos);


$_SESSION['produtos'] = remover_produto_do_carrinho($produtos, $id_produto);
header("Location: ../views/carrinhoDeCompras.php");
