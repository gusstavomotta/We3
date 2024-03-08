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
    
}