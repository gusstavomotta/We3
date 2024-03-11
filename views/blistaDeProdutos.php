<?php
session_start();

require "/home/imply/Documentos/GitHub/We3/Controller/produtoController.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de produtos</title>
</head>

<body>
    <h1>Lista dos produtos</h1>
    <p><?php listar_produtos() ?></p>
    <?php var_dump($_SESSION['nome']) ?>

</body>

</html>