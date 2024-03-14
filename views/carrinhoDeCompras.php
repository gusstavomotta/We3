<?php
require __DIR__ . "/../Controller/carrinhoController.php";
require __DIR__ . "/../Controller/produtoController.php";
require_once __DIR__ . "/../models/Carrinho.php";

session_start();
$produtos_carrinho = retorna_carrinho_de_compras_sessao();

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

            foreach ($produtos_carrinho as $produto) {
                $produto = unserialize($produto);
                $carrinho = cria_e_adiciona_produto_ao_carrinho($produto);
            }

            if (empty($carrinho)) {
                echo "Carrinho vazio. ";
                echo '<a href="/views/listaDeProdutos.php">Voltar à pagina de produtos</a>';
                exit;
            }

            print("Quantidade de produtos: " . $carrinho->contar_qtd_produtos());
            print("<br>");
            print("Subtotal: " . $carrinho->somar_subtotal());
            print("<br>");

            foreach ($produtos_carrinho as $produto) {
            ?>
                <div class="grid">
                    <div class="item">
                        <?php
                        $produto = unserialize($produto);
                        print("Descrição do produto: " . $produto->get_dsc_produto());
                        print("<br>");
                        print("Preço do produto: " . $produto->get_preco());
                        print("<br>");
                        ?>
                    </div>
                </div>
                <form method="post" action="../views/removerCarrinho.php">
                    <input type="hidden" name="produto" value="<?php echo $produto->get_id_produto(); ?>">
                    <button type="submit">Remover do Carrinho</button>
                </form>
                <!-- <button type="submit" name="produto" value="<?php echo $produto->get_id_produto(); ?>">Remover do Carrinho</button> -->

            <?php
            }
            ?>
        </div>
    </div>

    </p>
    <a href="/views/listaDeProdutos.php">Adicionar mais produtos ao carrinho</a>
    <a href="/views/finalizaCompra.php">Finalizar compra</a>
    <a href="/views/encerraSessao.php">Encerrar sessão</a>

</body>

</html>