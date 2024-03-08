<?php 

class Carrinho{

    private array $carrinho_compras;

    public function __construct(){
        
    }
    public function getCarrinho(){
        return $this->carrinho_compras;
    }

    public function adicionarProdutoAoCarrinho(Produto $produto){
        $this->carrinho_compras = [$produto];
    }
    /**
     * 
     * Verifica se essa função pode funcionar desse jeito
     */
    public function removerProdutoDoCarrinho(int $id){
        
        foreach ($this->carrinho_compras as $chave => $valor) {
            if ($valor['id'] == $id) {
                unset($this->carrinho_compras[$chave]);
                break;
            }
        }
    }

    public function contarQtdProdutos(){
        return count($this->carrinho_compras);
    }

    public function somarSubtotal(){

        $subtotal = 0;
        foreach ($this->carrinho_compras as $dados){
            $subtotal += $dados['preco'];

        }
        return $subtotal;
    }
}