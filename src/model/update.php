<?php

use Database\Database;

//cod
if( isset($_POST['cod']) ) {
    $cod = $_POST['cod'];
} else {
    $cod = null;
}

//data_hora
if( isset($_POST['data_hora']) ) {
    $data_hora = $_POST['data_hora'];
} else {
    $data_hora = null;
}

//itens
if( isset($_POST['itens']) ) {
    $itens = $_POST['itens'];
} else {
    $itens = null;
}

//quantidade
if( isset($_POST['quantidade']) ) {
    $quantidade = $_POST['quantidade'];
} else {
    $quantidade = null;
}

//pagamento
if( isset($_POST['pagamento']) ) {
    $pagamento = $_POST['pagamento'];
} else {
    $pagamento = null;
}

//local_entrega
if( isset($_POST['local_entrega']) ) {
    $localEntrega = $_POST['local_entrega'];
} else {
    $localEntrega = null;
}

//Verificando o recebimento das variáveis
/*
var_dump($cod);
var_dump($data_hora);
var_dump($itens);
var_dump($quantidade);
var_dump($pagamento);
var_dump($localEntrega);
*/

require_once "Database.php";
$db = new Database();

$db->update(
    "UPDATE pedidos SET itens = '$itens', quantidade = $quantidade,
    pagamento = '$pagamento', local_entrega = '$localEntrega'; "
);

header("location: ../public/lista.php");