<?php

//variavel global
$nome = "Gabriel";

function teste(){
    
    //para ler a variavel global
   global $nome;

   echo $nome;

}


function teste2(){

      $nome = "Joao";

      echo $nome ." no teste2";
}

teste();

echo "<br>";

teste2();
?>