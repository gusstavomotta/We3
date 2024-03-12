<?php session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Pagina Inicial</title>
</head>

<body>
    <img src="/home/imply/Documentos/GitHub/We3/views/123468810-padrão-sem-emenda-do-desenho-da-mão-do-tema-da-produção-do-cinema-apropriado-para-o-fundo.jpg" alt="">
    <h1>Login</h1>
    <form action="../Controller/loginController.php" method="post">
        
        <br>
        <label for="cpf">Cpf</label>
        <br>
        <input type="text" name="cpf" id="cpf">
        <br>
        <label for="email">E-mail</label>
        <br>
        <input type="text" name="email" id="email">
        <br>
        <br>
        <input type="submit" value="Login">
    </form>
    <br>
</body>


</html>