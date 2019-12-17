<?php 

$a = NULL;

$b = 55;

$c = 200;

var_dump($a);

echo "<br>";

echo "b = ".$b;

echo "<br>";

echo "c = ".$c;

echo "<br>";

var_dump($c > $b);

echo "<br>";

var_dump($a < $b);

echo "<br>";

var_dump($a === $b); // tres "===" compara o valor e o tipo

echo "<br/>";

var_dump($a !== $b);

echo "<br/>";

var_dump($a <=> $b); //se a é maior retona 1, se o dois forem iguais retorna 0, se b é maior retorna -1

echo "<br/>";

echo $a ?? $b ?? $c;// retorna o primeiro valor nao nulo

echo "<br/>";

echo ++$b; //incremento

echo "<br/>";

echo --$b;//decremento

echo "<br>";

$s = ($c + $b);

$r = ($c * $b)/10;

$result = ($c * $b)/10 == ($c + $b)/10;//comparando os resultados

echo $s;

echo "<br>";

echo $r;

echo "<br>";

var_dump($result);
 
?>
