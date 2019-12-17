<?php


//Variaveis super globais
$nome = (int)$_GET["a"];//converte para int

echo $nome;

echo "<br>";

var_dump($nome);

echo "<br>";

$ip = $_SERVER["REMOTE_ADDR"];//pega o ip do usuario

echo $ip;

echo "<br>";

//exibe a pagina que o usuarios está acessando
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>