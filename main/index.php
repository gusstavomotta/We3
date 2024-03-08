
<?php 
 
require __DIR__ . '/../classes/Requisicao.php';
require __DIR__ . '/../classes/Carrinho.php';

$carro  = new Carrinho ();

$pessoa = Api::requisicaoLogin ('65948272788', 'jefersongvargas2009@hotmail.com');
foreach ($pessoa as $dados){
     var_dump($dados); 
}

$produtos = Api::requisicaoProdutos();
foreach ($produtos as $produto){
     // $carro->adicionarProdutoAoCarrinho($produto);
     var_dump($produto);
}


