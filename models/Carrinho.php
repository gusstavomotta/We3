<?php

class Carrinho
{

    private static array $carrinho_compras = [];

    public function getCarrinho()
    {
        return self::$carrinho_compras;
    }

    /**
     * Adiciona um produto no carrinho de compras
     */

    public function adicionarProdutoAoCarrinho($lista_de_produtos)
    {
        foreach ($lista_de_produtos as $produto) {
            array_push(self::$carrinho_compras, $produto);
        }
    }

    /**
     * 
     * Percorre a lista de compras, procura o ID passado e remove da lista o produto
     */
    public function removerProdutoDoCarrinho(String $id)
    {

        foreach (self::$carrinho_compras as $chave => $produto) {
            if ($produto->getIdProduto() == $id) {
                unset(self::$carrinho_compras[$chave]);
            }
        }
    }
    /**
     * Conta o número de produtos dentro do carrinho de compras
     */
    public function contarQtdProdutos()
    {
        return count(self::$carrinho_compras);
    }
    /**
     * Realiza a soma do subtotal do carrinho
     */
    public function somarSubtotal()
    {
        $subtotal = 0;
        foreach (self::$carrinho_compras as $produto) {
            $subtotal += $produto->getPreco();
        }
        return $subtotal;
    }
}
