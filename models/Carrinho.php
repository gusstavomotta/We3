<?php

class Carrinho
{

    private static array $carrinho_compras = [];

    public function get_carrinho()
    {
        return self::$carrinho_compras;
    }

    /**Recebe como parâmetro um objeto produto
     * Adiciona esse produto ao carrinho
     */
    public function adicionar_produto_ao_carrinho(Produto $produto)
    {

        array_push(self::$carrinho_compras, $produto);
    }
    /**
     * Conta quantos produtos tem no carrinho
     */

    public function contar_qtd_produtos()
    {
        if (empty(self::$carrinho_compras)) {
            return 0;
        }
        return count(self::$carrinho_compras);
    }
    /**
     * Soma o subtotal dos produtos que estão no carrinho
     */
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
    /**
     * Recebe uma lista de produtos e um ID como parâmetros
     * Pecorre a lista procurando o ID informado e da unset no produto
     * retorna o array atualizado
     */
    public static function  remover_produto_do_carrinho(array $lista_de_produtos, String $id)
    {

        foreach ($lista_de_produtos as $chave => $produto) {
            $produto = unserialize($produto);
            if ($produto->get_id_produto() == $id) {
                unset($lista_de_produtos[$chave]);
            }
        }
        return $lista_de_produtos;
    }
}
