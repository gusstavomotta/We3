<?php 

class Carrinho{

    private array $carrinho_compras;

    public function __construct(){
        
    }
    public function getCarrinho(){
        return $this->carrinho_compras;
    }

    /**
     * Adiciona um produto no carrinho de compras
     */
    public function adicionarProdutoAoCarrinho(Produto $produto){
        $this->carrinho_compras = [$produto];
    }
    /**
     * 
     * Percorre a lista de compras, procura o ID passado e remove da lista o produto
     */
    public function removerProdutoDoCarrinho(int $id){
        
        foreach ($this->carrinho_compras as $chave => $valor) {
            if ($valor['id'] == $id) {
                unset($this->carrinho_compras[$chave]);
                break;
            }
        }
    }
    /**
     * Conta o número de produtos dentro do carrinho de compras
     */
    public function contarQtdProdutos(){
        return count($this->carrinho_compras);
    }
    /**
     * Realiza a soma do subtotal do carrinho
     */
    public function somarSubtotal(){

        $subtotal = 0;
        foreach ($this->carrinho_compras as $dados){
            $subtotal += $dados['preco'];

        }
        return $subtotal;
    }
}