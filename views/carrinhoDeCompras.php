<?php
require __DIR__ . "/../Controller/produtoController.php";
require_once __DIR__ . "/../models/Carrinho.php";

session_start();

$lista_de_produtos = $_SESSION['lista_de_produtos'];
$produtos_carrinho = retorna_carrinho_de_compras_sessao($lista_de_produtos);

$carrinho = new Carrinho();
foreach ($produtos_carrinho as $produto) {
    $produto = unserialize($produto);
    $carrinho->adicionar_produto_ao_carrinho($produto);
}

$carrinhoVazio = empty($carrinho->get_carrinho());
$quantidadeProdutos = $carrinho->contar_qtd_produtos();
$subTotal = $carrinho->somar_subtotal();
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
    <h1> Carrinho de Compras </h1>
    <p>
    <div class="grid">
        <div class="item">

            <?php
            if ($carrinhoVazio) {
                echo "Carrinho vazio. ";
                echo '<a href="/views/listaDeProdutos.php">Voltar à pagina de produtos</a>';
                exit;
            }

            echo "Quantidade de produtos: " . $quantidadeProdutos . "<br>";
            echo "Subtotal: " . $subTotal . "<br>";

            foreach ($produtos_carrinho as $produto) {
            ?>
                <div class="grid">
                    <div class="item">
                        <?php

                        $produto = unserialize($produto);
                        echo "Descrição do produto: " . $produto->get_dsc_produto() . "<br>";
                        echo "Preço do produto: " . $produto->get_preco() . "<br>";

                        ?>
                    </div>
                </div>

                <form method="post" action="../Controller/removerProdutoController.php">
                    <input type="hidden" name="produto" value="<?php echo $produto->get_id_produto(); ?>">
                    <button type="submit">Remover do Carrinho</button>
                </form>

            <?php
            }
            ?>
        </div>
    </div>

    </p>
    <a href="/views/listaDeProdutos.php">Adicionar mais produtos</a>
    <a href="/views/finalizaCompra.php">Finalizar compra</a>
    <a href="/../Controller/encerraSessaoController.php">Encerrar sessão</a>

</body>

</html>