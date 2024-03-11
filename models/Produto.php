<?php

class Produto
{

    private $idproduto;
    private $dscproduto;
    private $preco;
    public function __construct(string $idproduto, string $dscproduto, float $preco)
    {

        $this->idproduto = $idproduto;
        $this->dscproduto = $dscproduto;
        $this->preco = $preco;
    }

    public function getIdProduto()
    {
        return $this->idproduto;
    }
    public function getDscProduto()
    {
        return $this->dscproduto;
    }
    public function getPreco()
    {
        return $this->preco;
    }

    public function setIdProduto(string $idproduto)
    {
        $this->idproduto = $idproduto;
    }
    public function setDscProduto(string $dscproduto)
    {
        $this->dscproduto = $dscproduto;
    }
    public function setPreco(float $preco)
    {
        $this->preco = $preco;
    }

    public function __toString()
    {
        $ret = "\nId do produto: " . $this->getIdProduto() . "\n";
        $ret .= "Descrição do produto: " . $this->getDscProduto() . "\n";
        $ret .= "Preço do produto: " . $this->getPreco() . "\n";
        return (string) $ret;
    }

    public static function verificaRetornaArrayProdutos($produtos)
    {
        if ($produtos && isset($produtos['result'])) {

            $lista_produtos_api = $produtos['result'];
            $lista_de_produtos = [];

            foreach ($lista_produtos_api as $produto_dados) {
                $produto = new Produto(
                    $produto_dados['idproduto'],
                    $produto_dados['dscproduto'],
                    floatval($produto_dados['preco'])
                );

                array_push($lista_de_produtos, $produto);
            }
        } else {
            echo "Não foi possível retornar os produtos!";
        }
        return $lista_de_produtos;
    }
}
