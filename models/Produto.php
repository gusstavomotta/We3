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

    public function get_id_produto()
    {
        return $this->idproduto;
    }
    public function get_dsc_produto()
    {
        return $this->dscproduto;
    }
    public function get_preco()
    {
        return $this->preco;
    }

    // public function set_id_produto(string $idproduto)
    // {
    //     $this->idproduto = $idproduto;
    // }
    // public function set_dsc_produto(string $dscproduto)
    // {
    //     $this->dscproduto = $dscproduto;
    // }
    // public function set_preco(float $preco)
    // {
    //     $this->preco = $preco;
    // }


    public static function verifica_retorna_array_produtos(array $produtos)
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
            return $lista_de_produtos;
        }
        return false;
    }
}
