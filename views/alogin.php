
<?php
session_start();
require "/home/imply/Documentos/GitHub/We3/models/Requisicao.php";
require "/home/imply/Documentos/GitHub/We3/models/Usuario.php";

$cpf = $_POST["cpf"];
$email = $_POST["email"];

$pessoa_api = Requisicao::requisicaoLogin($cpf, $email);
$usuario = Usuario::verificaRetornaUsuario($pessoa_api);

if ($usuario != false) {
    $_SESSION["cpf"] = $usuario->getCpf();
    $_SESSION["email"] = $usuario->getEmail();
    $_SESSION["id"] = $usuario->getIdPessoa();
    $_SESSION["nome"] = $usuario->getNome();

    header("location: blistaDeProdutos.php");
} else {
    echo "Cpf ou email inválidos, tente novamente!";
}
