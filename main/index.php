
<?php 
 
require '/home/imply/Documentos/GitHub/We3/classes/Requisicao.php';
require '/home/imply/Documentos/GitHub/We3/classes/Carrinho.php';

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


