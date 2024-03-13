<?php
require __DIR__ . "/../models/Carrinho.php";
function cria_e_adiciona_produto_ao_carrinho(Produto $produto)
{

     $carro = new Carrinho();
     $carro->adicionar_produto_ao_carrinho($produto);
     return $carro;
}

function retorna_id_do_produto(String $string)
{

     $offset = strpos($string, "Id do produto: ");

     if ($offset !== false) {

          $idProduto = substr($string, $offset + strlen("Id do produto: "), 32);
          return $idProduto;
     }

     return false;
}
