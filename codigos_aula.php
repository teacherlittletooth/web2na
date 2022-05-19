<?php

echo "<h1>Hello world!</h1>";

echo "<hr style='height: 20px; background-color: purple'>";

//Declaração e atribuição de variáveis
$nome = "Paulo";
$sobrenome = "Donini";

//Declaração e atribuição de constantes
define('NOME',      'Paulo');
define('SOBRENOME', 'Donini');

//Concatenando dados
echo $nome ." ". $sobrenome . "<br>";
echo NOME ." ". SOBRENOME;

//Operadores aritméticos
echo "<hr>";
$num1 = 88.88;
$num2 = 77;

echo ($num1 + $num2) . "<br>";
echo ($num1 - $num2) . "<br>";
echo ($num1 * $num2) . "<br>";
echo ($num1 / $num2) . "<br>";

$n1 = 6.5;
$n2 = 8.9;
$media = ($n1 + $n2) / 2;
echo $media;

echo "<hr>";
//Operadores relacionais
/*
igual           ==
diferente       !=
maior           >
menor           <
maior igual     >=
menor igual     <=
*/

var_dump($nome);
var_dump($num1);
var_dump($num2);

echo "<hr>";

var_dump(
    !($n1 != $n2)
);

var_dump(
    (strlen($sobrenome) < 5)
);

//Operadores lógicos
//AND   &&
//OR    ||
//NOT   !

$login = "dentinho";
$pass = "@senha";
//PHP é Case Sensitive
if($login == "dentinho" &&
    $pass == "@senha") {
    echo "<h2>Seja bem vindo!</h2>";
} else {
    echo "<h2>Acesso negado!</h2>";
}

echo "<hr>";

$cores = [
    "VERDE",
    "AMARELO",
    "VERMELHO"
];

//echo $cores[0] . "<br>";
$sinaleira = $cores[random_int(0, 2)];

if($sinaleira == "VERDE") {
    echo "<h1 style='background-color: green'>Prossiga!</h1>";
} elseif($sinaleira == "AMARELO") {
    echo "<h1 style='background-color: yellow'>Atenção!</h1>";
} else {
    echo "<h1 style='background-color: red'>Pare!</h1>";
}

echo "<hr>";
//switch => analisa casos com base numa referência

$reference = 2;

switch($reference) {
    case 0: header("location: https://www.google.com");
        break;
    case 1: header("location: https://www.youtube.com");
        break;
    default: echo "Não escolhestes nenhum site.";
}

//Laços de repetição
//FOR => início; condição; incremento
echo "<hr>";

for($i = 1; $i <= 10; $i++) {
    echo "6 x $i = " . ($i * 6) . "<br>";
}

//WHILE => condição
echo "<hr>";
$count = 0;
while($count < 10) {
    echo $count . " - ";
    $count++;
}

//FOREACH => lista "as" referência
echo "<hr>";
$carros = array(
    "Fusca",
    "Monza",
    "Opala",
    "Brasília",
    "Belina",
    "Corcel",
    "Maverick",
    "Chevette"
);

sort($carros);

//var_dump($carros);
for($i = 0; $i < count($carros); $i++) {
    echo $carros[$i] . " - ";
}

rsort($carros);

echo "<hr>";
foreach($carros as $c) {
    echo $c . " / ";
}