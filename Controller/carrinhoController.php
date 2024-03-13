<?php
require __DIR__ . "/../models/Carrinho.php";
function criarCarrinho($lista_de_produtos)
{

     $carro = new Carrinho();
     $carro->adicionarProdutoAoCarrinho($lista_de_produtos);

     foreach ($lista_de_produtos as $produto) {
          print($produto->getPreco());
     }

     var_dump("\n" . "Quantidade de produtos: " . $carro->contarQtdProdutos() . "\n");
     var_dump("Subtotal: " . $carro->somarSubtotal() . "\n");
}

function pegaIdString($string)
{

     $offset = strpos($string, "Id do produto: ");

     if ($offset !== false) {
          $idProduto = substr($string, $offset + strlen("Id do produto: "), 40);


          return $idProduto;
     } else {
          echo "Id não encontrado";
     }
}
