<?php

class Produto {

    private $idproduto;
    private $dscproduto;
    private $preco;
    private static array $lista_produtos = [];
    public function __construct(string $idproduto, string $dscproduto, float $preco){

        $this->idproduto = $idproduto;
        $this->dscproduto = $dscproduto;
        $this->preco = $preco;
    }

    public function getIdProduto(){
        return $this->idproduto;
    }
    public function getDscProduto(){
        return $this->dscproduto;
    }
    public function getPreco(){
        return $this->preco;
    }
    public static function getProdutos(){
        return self::$lista_produtos;
    }
    public function setIdProduto(string $idproduto){
        $this->idproduto = $idproduto;
    }
    public function setDscProduto(string $dscproduto){
        $this->dscproduto = $dscproduto;
    }
    public function setPreco(float $preco){
        $this->preco = $preco;
    }
    /**
     * Adiciona um produto na lista de produtos
     */
    public static function adicionarProdutoNaListaProdutos(Produto $produto){
        array_push(self::$lista_produtos, $produto);
    }
}