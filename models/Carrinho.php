<?php

class Carrinho
{

    private static array $carrinho_compras = [];
    public function get_carrinho()
    {
        return self::$carrinho_compras;
    }

    public function adicionar_produto_ao_carrinho($produto)
    {

        array_push(self::$carrinho_compras, $produto);
    }

    public function remover_produto_do_carrinho(String $id)
    {

        foreach (self::$carrinho_compras as $chave => $produto) {
            if ($produto->get_id_produto() == $id) {
                unset(self::$carrinho_compras[$chave]);
            }
        }
    }

    public function contar_qtd_produtos()
    {
        return count(self::$carrinho_compras);
    }

    public function somar_subtotal()
    {
        $subtotal = 0;
        foreach (self::$carrinho_compras as $produto) {
            $subtotal += $produto->get_preco();
        }
        return $subtotal;
    }
}
