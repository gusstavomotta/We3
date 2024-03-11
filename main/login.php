<?php 

session_start();

$pessoa_api = Requisicao::requisicaoLogin('65948272788', 'jefersongvargas2009@hotmail.com');
$usuario = Usuario::verificaRetornaUsuario($pessoa_api);

