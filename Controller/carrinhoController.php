<?php
require __DIR__ . "/../models/Carrinho.php";
function criarCarrinho($produto)
{

     $carro = new Carrinho();
     $carro->adicionarProdutoAoCarrinho($produto);

     return $carro;
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
