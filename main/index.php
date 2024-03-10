
<?php 
 
require __DIR__ . '/../classes/Requisicao.php';
require __DIR__ . '/../classes/Carrinho.php';
require __DIR__ . '/../classes/Usuario.php';
require __DIR__ . '/../classes/Produto.php';


$pessoa = Api::requisicaoLogin('65948272788', 'jefersongvargas2009@hotmail.com');

if ($pessoa && isset($pessoa['result']['results'][0])) {
    $dados = $pessoa['result']['results'][0];
    
    $usuario = new Usuario(
        $dados['nome'],
        $dados['email'],
        $dados['cpf'],
        $dados['idpessoa']
    );
} else {
    echo "Não foi possível realizar o login, tente novamente!";
}

$produtos = Api::requisicaoProdutos();

if ($produtos && isset($produtos['result'])) {

    $lista_produtos_api = $produtos['result'];
    $lista_de_produtos = [];

    foreach ($lista_produtos_api as $produto_dados) {
        $produto = new Produto(
            $produto_dados['idproduto'],
            $produto_dados['dscproduto'],
            floatval($produto_dados['preco']) 
        );

        array_push($lista_de_produtos, $produto);
    }

} else {
    echo "Não foi possível retornar os produtos!";
}

var_dump($usuario->getCpf());
var_dump($usuario->getEmail());
var_dump($usuario->getNome());
var_dump($usuario->getIdPessoa());

$carro = new Carrinho();
foreach ($lista_de_produtos as $produto){
     $carro->adicionarProdutoAoCarrinho($produto);
}

var_dump("\n" . "Quantidade de produtos: " .$carro->contarQtdProdutos(). "\n");
var_dump("Subtotal: " . $carro->somarSubtotal() . "\n");

$lista_carrinho = $carro->getCarrinho();
foreach ($lista_carrinho as $produto){
     var_dump($produto);

}

$carro->removerProdutoDoCarrinho("23b20c3e763a21d3d876b0a5d2cc6aa603e09118");
$lista_carrinho = $carro->getCarrinho();
foreach ($lista_carrinho as $produto){
     var_dump($produto);

}
