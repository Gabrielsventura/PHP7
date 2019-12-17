<?php

//tipos primitovs básicos do php
$nome = "Gabriel";
$teste = "Ventura Store";

$ano = 2019;
$salarioProg = 5000.99;
$bloqueado = false;

echo "<br>";

var_dump($ano);
var_dump($salarioProg);
var_dump($bloqueado);

echo "<br>";

echo $ano;

echo "<br>";

echo $salarioProg;

echo "<br>";


//Tipos compostos:

//array cujo primeiro indice e sempre 0, armazena textos e numeros
$jogos = array("god of war", "incharted", "the last of us");

//exibe o texto pelo indice
echo $jogos[2];

echo "<br>";

//Objeto
$nascimento = new DateTime();
var_dump($nascimento);

echo "<br>";

/////////////////////////////////////

//Tipoes especiais:
//para abrir arquivos
$arquivo = fopen("vars2.php", "r");

echo "<br>";

var_dump($arquivo);

echo "<br>";

$nulo = NULL;

echo "<br>";

var_dump($nulo)
?>