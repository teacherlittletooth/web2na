<?php

use Model\Pedido;

require_once "../vendor/autoload.php";

$pedido = new Pedido(); //Criando novo objeto

//Recebendo ingrediente
if( isset($_GET['ingrediente']) ) {
    $pedido->itens = $_GET['ingrediente'];
} else {
    $pedido->itens = null;
}

//Recebendo qtde
if( isset($_GET['qtde']) ) {
    $pedido->quantidade = $_GET['qtde'];
} else {
    $pedido->quantidade = null;
}

//Recebendo pgto
if( isset($_GET['pgto']) ) {
    $pedido->pagamento = $_GET['pgto'];
} else {
    $pedido->pagamento = null;
}

//Recebendo entrega
if( isset($_GET['entrega']) ) {
    $pedido->localEntrega = $_GET['entrega'];
} else {
    $pedido->localEntrega = null;
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
</head>
<body>
    <?= $pedido->gerarDesconto() ?>

    <h3> Itens: </h3>
    <?php foreach($pedido->itens as $item) : ?>
        <!-- Aqui repete -->
       <h4> <?= $item ?> </h4>
    <?php endforeach ?>

    <h3> Quantidade: </h3>
    <h4> <?= $pedido->quantidade ?>

    <h3> Pagamento: </h3>
    <h4> <?= $pedido->pagamento ?>

    <h3> Entrega: </h3>
    <h4> <?= $pedido->localEntrega ?>
</body>
</html>