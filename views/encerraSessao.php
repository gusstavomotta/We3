<?php
session_start();

unset($_SESSION['produtos']);
unset($_SESSION['cpf']);
unset($_SESSION['email']);
unset($_SESSION['nome']);
unset($_SESSION['id']);
sleep(2);

header("Location: ../views/paginaInicial.php");
