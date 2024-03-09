
<?php 
 
require __DIR__ . '/../classes/Requisicao.php';
require __DIR__ . '/../classes/Carrinho.php';
require __DIR__ . '/../classes/Usuario.php';
require __DIR__ . '/../classes/Produto.php';


$carro  = new Carrinho ();

$pessoa = Api::requisicaoLogin ('65948272788', 'jefersongvargas2009@hotmail.com');
foreach ($pessoa as $dados){
     var_dump($dados); 
}

// $produtos = Api::requisicaoProdutos();
// foreach ($produtos as $produto){
//      // $carro->adicionarProdutoAoCarrinho($produto);
//      var_dump($produto);
// }

$pessoa1 = new Usuario("gustavo", "gumotta2908@hotmail.com", "04295643092", "123231");
$produto = new Produto("12120", "geleia", 15.50);
$produto2 = new Produto("12121", "geleia", 15.50);

// Produto::adicionarProdutoNaListaProdutos($produto);

var_dump($produto);
var_dump($pessoa1->getCpf());
var_dump($pessoa1->getEmail());
var_dump($pessoa1->getNome());
var_dump($pessoa1->getIdPessoa());
// var_dump(Produto::getProdutos());

$carro->adicionarProdutoAoCarrinho($produto);
$carro->adicionarProdutoAoCarrinho($produto2);

var_dump($carro->contarQtdProdutos());
var_dump($carro->somarSubtotal());
var_dump($carro->getCarrinho());
var_dump($carro->removerProdutoDoCarrinho("12120"));
var_dump($carro->getCarrinho());
