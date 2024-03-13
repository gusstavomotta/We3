<?php
require __DIR__ . "/../models/Carrinho.php";
function criarCarrinho($lista_de_produtos)
{

     $carro = new Carrinho();

     foreach ($lista_de_produtos as $produto) {
          $carro->adicionarProdutoAoCarrinho($produto);
     }

     $lista_carrinho = $carro->getCarrinho();
     foreach ($lista_carrinho as $produto) {
          var_dump($produto->__toString());
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
