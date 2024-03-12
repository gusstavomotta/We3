<?php session_start();
require __DIR__ . "/../Controller/produtoController.php";
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
    <form action="carrinhoDeCompras.php" method="post">
    <div class="grid-container">

        <?php
        $lista = listarProdutos();
        foreach ($lista as $key => $produto) {
        ?>
                <div class="item">
                    <?php echo $produto->getDscProduto() . "<br>"; ?>
                    <?php echo "<br>"?>
                    <td><?php echo "Preço: " . $produto->getPreco() . " R$" . "<br>"; ?></td>
                    <label><input type="checkbox" name="produto[]" id="<?php echo $key; ?>" value="<?php echo $produto; ?>"></label><br>
                    <!-- <a class="comprar" href="/">Comprar</a> -->                  
                </div>
        <?php
        }
        ?>
    </div>


        <!-- <?php var_dump($_SESSION['nome']) ?> -->
        <input type="submit" value="Visualizar Carrinho">
    </form>
</body>


</html>