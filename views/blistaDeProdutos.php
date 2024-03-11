<?php
session_start();

require __DIR__  ."/../Controller/produtoController.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Pagina de produtos</title>
</head>

<body>
    <h1>Lista dos produtos</h1>
    <p><?php listar_produtos() ?></p>
    <?php var_dump($_SESSION['nome']) ?>

</body>

</html>