<?php

session_start();

require __DIR__ . "/../models/Requisicao.php";
require __DIR__ . "/../models/Usuario.php";

$cpf = $_POST["cpf"];
$email = $_POST["email"];
verifica_e_redireciona_usuario($cpf, $email);

function verifica_e_redireciona_usuario($cpf, $email)
{

    $pessoa_api = Requisicao::requisicao_login($cpf, $email);
    $usuario = Usuario::verifica_retorna_usuario($pessoa_api);

    if ($usuario != false) {
        $_SESSION["cpf"] = $usuario->get_cpf();
        $_SESSION["email"] = $usuario->get_email();
        $_SESSION["id"] = $usuario->get_id_pessoa();
        $_SESSION["nome"] = $usuario->get_nome();

        header("location: ../views/blistaDeProdutos.php");
    } else {
        header("location: ../views/apaginaInicial.php");
    }
}
