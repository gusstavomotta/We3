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
        <table>
            <tr>
                <th>Produto</th>
                <th>Preco</th>
                <th>Comprar</th>
            </tr>
        <?php
        $lista = listarProdutos();
        foreach ($lista as $key => $produto) {
        ?>

            <tr>
                <div class="grid">
                    <div class="item">
                        <td><?php echo $produto->getDscProduto(); ?></td>
                        <td><?php echo $produto->getPreco(); ?></td>
                        <td><label><input type="checkbox" name="produto[]" id="<?php echo $key; ?>" value="<?php echo $produto; ?>"></label></td><br>
                        <!-- <a class="comprar" href="/">Comprar</a> -->
                    </div>
                </div>
            </tr>

        <?php
        }
        ?>

        <!-- <?php var_dump($_SESSION['nome']) ?> -->
        <input type="submit" value="Visualizar Carrinho">
    </form>
</body>
</html>
