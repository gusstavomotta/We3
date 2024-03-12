<?php session_start();

if (isset($_POST['produto'])) {
    $produtosSelecionados = $_POST['produto'];
    // Agora $produtosSelecionados é um array contendo os produtos selecionados
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Carrinho de Compras</title>
</head>

<body>
    <h1>
    
        <?php foreach($produtosSelecionados as $produtos){
            echo "<br>";
            print_r($produtos);   
            echo "<br>";
            
        }
            ?>
               </div>
            </div>

    </h1>

    <p>
        Desenvolvido por Gustavo e Rafael
    </p>

</body>

</html>