<?php
require __DIR__ . "/../Controller/carrinhoController.php";
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

    <div class="grid">
        <div class="item">
            <?php foreach ($produtosSelecionados as $produtos) {
            ?>
                <div class="grid">
                    <div class="item">
                        <?php print($produtos); ?>
                    </div>
                </div>
            <?php } ?>
            </p>

</body>
</html>