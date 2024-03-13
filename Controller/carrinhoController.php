<?php
require __DIR__ . "/../models/Carrinho.php";

function cria_e_adiciona_produto_ao_carrinho(Produto $produto)
{

     $carro = new Carrinho();
     $carro->adicionar_produto_ao_carrinho($produto);
     return $carro;
}
