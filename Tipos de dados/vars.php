<?php

$nome = "Gabriel";

$sobrenome = " Ventura";

var_dump($nome);//mostra informações sobre a viariável

echo "<br><br>";

$completo = $nome.$sobrenome;//concatenação

echo $completo;

echo "<br><br>";

/*
Abre e fecha comentários
*/

echo $nome;

echo "<br><br>";

$anoNascimento = 1995;

var_dump($anoNascimento);

echo "<br><br>";

echo $anoNascimento;

$nomeCompleto = "Gabriel Ventura";

echo "<br><br>";


var_dump($nomeCompleto);

unset($nomeCompleto);//tira a variavel da memoria

echo "<br><br>";

if(isset($nomeCompleto)){//checa se a varivel existe

	echo $nomeCompleto;
}

echo "<br><br>";





?>