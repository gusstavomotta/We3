<?php 

class Carrinho{

    private static array $carrinho_compras = [];

    public function __construct(){
        
    }
    public function getCarrinho(){
        return self::$carrinho_compras;
    }

    /**
     * Adiciona um produto no carrinho de compras
     */
    public function adicionarProdutoAoCarrinho(Produto $produto){
        array_push(self::$carrinho_compras, $produto);
        print_r("Produto adicionado com sucesso!");
    }
    /**
     * 
     * Percorre a lista de compras, procura o ID passado e remove da lista o produto
     */
    public function removerProdutoDoCarrinho(int $id){
        
        foreach (self::$carrinho_compras as $chave => $produto) {
            if ($produto->getIdProduto() == $id) {
                unset(self::$carrinho_compras[$chave]);
                print_r("Removido com sucesso!");
                break;
            }
        }
    }
    /**
     * Conta o número de produtos dentro do carrinho de compras
     */
    public function contarQtdProdutos(){
        return count(self::$carrinho_compras);
    }
    /**
     * Realiza a soma do subtotal do carrinho
     */
    public function somarSubtotal(){
        $subtotal = 0;
        foreach (self::$carrinho_compras as $produto){
            $subtotal += $produto->getPreco();
        }
        return $subtotal;
    }
}