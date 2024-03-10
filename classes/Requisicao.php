<?php

class Api{
    /**
     * Chama a API e retorna um usuário
     */
    public static function requisicaoLogin(String $cpf, String $email)
    {
         $urlBase = 'https://ah.we.imply.com/loginDesafio3';
         $urlCompleta= "$urlBase/$cpf/$email";

         $ch = curl_init($urlCompleta);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

         $response = curl_exec($ch);

         if (curl_errno($ch)) {
            http_response_code(400);
            echo json_encode(['message' => 'Curl error: ' . curl_error($ch)]);
            exit;
         }
            curl_close($ch);

        $decodificado = json_decode($response, true);


        if(!$decodificado){
            http_response_code(404);
            echo json_encode(['message' => 'Data not found']);
            exit;
        }

        return $decodificado;
    }
    /**
     * Chama a API e retorna uma json de produtos
     */
    public static function requisicaoProdutos(){

        $url = 'https://ah.we.imply.com/getProdutos';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
           http_response_code(400);
           echo json_encode(['message' => 'Curl error: ' . curl_error($ch)]);
           exit;
        }
           curl_close($ch);

       $decodificado = json_decode($response, true);


       if(!$decodificado){
           http_response_code(404);
           echo json_encode(['message' => 'Data not found']);
           exit;
       }

       return $decodificado;

    }
    public static function verificaRetornaUsuario($pessoa){
        if ($pessoa && isset($pessoa['result']['results'][0])) {
            $dados = $pessoa['result']['results'][0];
            
            $usuario = new Usuario(
                $dados['nome'],
                $dados['email'],
                $dados['cpf'],
                $dados['idpessoa']
            );
        } else {
            echo "Não foi possível realizar o login, tente novamente!";
        }
        return $usuario;
    }
    public static function verificaRetornaArrayProdutos($produtos){
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
