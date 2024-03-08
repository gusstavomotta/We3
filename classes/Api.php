<?php

class Api{

    public function Requisicao($cpf, $email)
    {
         $urlBase = 'https://ah.we.imply.com';
         $url = "$urlBase/$cpf/$email";

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
}



