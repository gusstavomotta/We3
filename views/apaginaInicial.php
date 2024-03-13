<?php
session_destroy();
session_start();
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
    <h1>Pagina inicial</h1>
    <form action="../Controller/loginController.php" method="post">
        <div class="body">
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