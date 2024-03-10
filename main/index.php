
<?php 
 
require __DIR__ . '/../classes/Requisicao.php';
require __DIR__ . '/../classes/Carrinho.php';
require __DIR__ . '/../classes/Usuario.php';
require __DIR__ . '/../classes/Produto.php';

$carro = new Carrinho();

$pessoa_api = Api::requisicaoLogin('65948272788', 'jefersongvargas2009@hotmail.com');
$produtos_api = Api::requisicaoProdutos();

$usuario = Api::verificaRetornaUsuario($pessoa_api);
$lista_de_produtos = Api::verificaRetornaArrayProdutos($produtos_api);

var_dump($usuario->__toString());

foreach ($lista_de_produtos as $produto){
     $carro->adicionarProdutoAoCarrinho($produto);
}

$lista_carrinho = $carro->getCarrinho();
foreach ($lista_carrinho as $produto){
     var_dump($produto->__toString());

}
var_dump("\n" . "Quantidade de produtos: " .$carro->contarQtdProdutos(). "\n");
var_dump("Subtotal: " . $carro->somarSubtotal() . "\n");


