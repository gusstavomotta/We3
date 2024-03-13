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
        <?php foreach ($produtosSelecionados as $produtos) {
        ?>
    <div class="grid">
        <div class="item">
            <?php print(pegaIdString($produtos));
            //var_dump($produtos)
            ?>
        </div>
    </div>
<?php }
        //tem que ajusar o subtotal
        // e a quantidade items
        // Pegar o id como string e consultar ele na lista de produtos
?>
</p>
<a href="/views/blistaDeProdutos.php">Voltar à lista de produtos</a>
<!-- <a href="/views/apaginaInicial.php">Voltar à pagina inicial</a> -->
</body>

</html>