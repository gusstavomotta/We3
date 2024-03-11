
<?php
require "/home/imply/Documentos/GitHub/We3/models/Requisicao.php";
require "/home/imply/Documentos/GitHub/We3/models/Usuario.php";

$cpf = $_POST["cpf"];
$email = $_POST["email"];

$pessoa_api = Requisicao::requisicaoLogin($cpf, $email);
$usuario = Usuario::verificaRetornaUsuario($pessoa_api);

var_dump($usuario->__toString());
