<?php

require __DIR__ . "/../Controller/produtoController.php";
session_start();

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
    <h1>Lista de produtos</h1>
    <form action="carrinhoDeCompras.php" method="post">
        <div class="grid-container">

            <?php

            $lista_de_produtos = filtrar_produtos();
            foreach ($lista_de_produtos as $key => $produto) {

            ?>
                <div class="item">
                    <?php echo $produto->get_dsc_produto() . "<br>"; ?>
                    <?php echo "<br>" ?>
                    <td><?php echo "Preço: " .  " R$ " .  $produto->get_preco()  . "<br>"; ?></td>


                    <!-- A CHARADA ESTÁ POR AQUI, TIRANDO OS COLCHETES DO NAME=PRODUTO[] O PROGRAMA RETORNA SO 1 PRODUTO POREM NAO ADD NA LISTA -->
                    <label><input type="checkbox" name="produto[]" id="<?php echo $key; ?>" value="<?php echo $produto; ?>"></label><br>
                    <!-- <input type="submit" name="comprar" value="Comprar">
                    <label><input type="hidden" name="produto[]" id="<?php echo $key; ?>" value="<?php echo $produto; ?>"></label><br> -->



                </div>
            <?php
            }
            ?>
        </div>

        <input type="submit" value="Visualizar Carrinho">
    </form>
    <!-- <a href="/views/apaginaInicial.php">Voltar à pagina inicial</a> -->
    <a href="/views/carrinhoDeCompras.php">Voltar ao carrinho</a>


</body>


</html>