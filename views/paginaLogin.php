<?php

session_start();

if (isset($_SESSION["mensagem_erro"])) {
    echo '<h1>' . $_SESSION["mensagem_erro"] . '</h1>';
    unset($_SESSION["mensagem_erro"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <form action="../Controller/loginController.php" method="post">
        <div class="body-login">
            <div class="form">
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
                <input type="submit" value="Realizar Login">
            </div>
        </div>
    </form>
    <br>
</body>

</html>