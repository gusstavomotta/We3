<?php
require __DIR__ . "/../Controller/carrinhoController.php";

session_start();
$produtos = $_SESSION['produtos'];
$id_produto = $_POST['produto'];

print($produtos);
var_dump($id_produto);


$_SESSION['produtos'] = remover_produto_do_carrinho($produtos, $id_produto);

header("Location: ../views/carrinhoDeCompras.php");
