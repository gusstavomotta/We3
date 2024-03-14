<?php

session_start();
unset($_SESSION['produtos']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Compra finalizada</title>
</head>

<body>
    <h1>Compra finalizada com sucesso!</h1>
    <h1>Obrigado pela preferência <?php echo $_SESSION['nome'] ?></h1>
</body>

</html>

<?php session_destroy(); ?>