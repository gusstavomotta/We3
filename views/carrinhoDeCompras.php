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
                $carrinho = cria_e_adiciona_produto_ao_carrinho($produto);
            }

            if (empty($carrinho)) {
                echo "Carrinho vazio. ";
                echo '<a href="/views/blistaDeProdutos.php">Voltar à pagina de produtos</a>';
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
                        print("Descrição do produto: " . $produto->get_dsc_produto());
                        print("<br>");
                        print("Preço do produto: " . $produto->get_preco());
                        print("<br>");
                        ?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    </p>
    <a href="/views/blistaDeProdutos.php">Adicionar mais produtos ao carrinho</a>
    <a href="/views/finalizaSessao.php">Finalizar Compra</a>
</body>

</html>