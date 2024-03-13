<?php
session_start();

require __DIR__ . "/../models/Requisicao.php";
require __DIR__ . "/../models/Usuario.php";

if (isset($_POST["cpf"]) && isset($_POST["email"])) {
    verifica_e_redireciona_usuario($_POST["cpf"], $_POST["email"]);
}

function verifica_e_redireciona_usuario(String $cpf, String $email)
{
    $pessoa_api = Requisicao::requisicao_login($cpf, $email);
    $usuario = Usuario::verifica_retorna_usuario($pessoa_api);

    if ($usuario != false) {
        $_SESSION["cpf"] = $usuario->get_cpf();
        $_SESSION["email"] = $usuario->get_email();
        $_SESSION["id"] = $usuario->get_id_pessoa();
        $_SESSION["nome"] = $usuario->get_nome();

        header("Location: ../views/blistaDeProdutos.php");
    } else {
        $_SESSION["mensagem_erro"] = "Email ou CPF inválidos, tente novamente!";
        header("Location: ../views/apaginaInicial.php");
    }
}
