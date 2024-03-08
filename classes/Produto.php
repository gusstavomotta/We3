<?php

class Produto {

    private $idproduto;
    private $dscproduto;
    private $preco;
    private array $lista_produtos;
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
    public function getProduto(){
        return $this->lista_produtos;
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
    public static function adicionarProdutoNaListaProdutos(Produto $produto){
        self::$lista_produtos = [$produto];
    }
}