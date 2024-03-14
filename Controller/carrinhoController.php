<?php
require __DIR__ . "/../models/Carrinho.php";

function cria_e_adiciona_produto_ao_carrinho(Produto $produto)
{

     $carro = new Carrinho();
     $carro->adicionar_produto_ao_carrinho($produto);
     return $carro;
}
function  remover_produto_do_carrinho(array $array, String $id)
{

     foreach ($array as $chave => $produto) {
          if ($produto->get_id_produto() == $id) {
               unset($array[$chave]);
          }
     }
     return $array;
}
