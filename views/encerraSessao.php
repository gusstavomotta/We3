<?php
session_start();
unset($_SESSION['produtos']);
sleep(2);
header("Location: ../views/apaginaInicial.php");
