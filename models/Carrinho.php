<?php

class Carrinho
{

    private static array $carrinho_compras = [];
    public function get_carrinho()
    {
        return self::$carrinho_compras;
    }

    public function adicionar_produto_ao_carrinho(Produto $produto)
    {

        array_push(self::$carrinho_compras, $produto);
    }



    public function contar_qtd_produtos()
    {
        if (empty(self::$carrinho_compras)) {
            return 0;
        }
        return count(self::$carrinho_compras);
    }

    public function somar_subtotal()
    {

        if (empty(self::$carrinho_compras)) {
            return 0;
        }

        $subtotal = 0;
        foreach (self::$carrinho_compras as $produto) {
            $subtotal += $produto->get_preco();
        }
        return $subtotal;
    }
}
