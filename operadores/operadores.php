<?php  

$nome = "Gabriel";

echo $nome . " estudante de SI<br/>"; //concatena strings

$nome .= " treinando php";

echo $nome;

echo "<br/><br/>Descontos<br/>";

$valorTotal = 0;

$valorTotal += 100; //o valortotal soma com ele mesmo + 100

$valorTotal += 25;

$valorTotal *= .9; //.9 = 90%

echo "<br/>--------------------------------------------------------------------------------------------<br/>";

echo $valorTotal;

?>
