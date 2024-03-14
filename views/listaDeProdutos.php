<?php
require __DIR__ . "/../Controller/produtoController.php";

session_start();

if (!isset($_SESSION['cpf']) || !isset($_SESSION['email'])) {
    header("Location: ../views/paginaLogin.php");
}

$filme = $_POST['filme'];
$lista_de_produtos = filtrar_produtos();
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

        <h1><?php echo $filme ?></h1>

        <div class="grid-container">

            <?php
            foreach ($lista_de_produtos as $produto) {
            ?>
                <div class="item">

                    <?php echo $produto->get_dsc_produto() . "<br>"; ?>
                    <?php echo "Preço: R$ " .  $produto->get_preco()  . "<br>"; ?>

                    <button class="comprar-botao" type="submit" name="produto" value="<?php echo $produto->get_id_produto(); ?>">Adicionar ao carrinho</button>

                </div>
            <?php
            }
            ?>
        </div>
    </form>

    <a href="/views/carrinhoDeCompras.php">Ir ao carrinho</a>
    <a href="/../Controller/encerraSessaoController.php">Encerrar sessão</a>
    <a href="/views/paginaInicial.php">Voltar</a>

</body>

</html>