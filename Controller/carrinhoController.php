<?php
require __DIR__ . "/../models/Carrinho.php";
function criarCarrinho($lista_de_produtos)
{

     $carro = new Carrinho();
     $carro->adicionarProdutoAoCarrinho($lista_de_produtos);

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
