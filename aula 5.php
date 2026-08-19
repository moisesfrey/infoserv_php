<?php

/** 
 *  *calcular o IMC de uma pessoa 
 *infromar se ela esta acima do peso, peso ideal ou abaixo do peso
*/

echo"<br>";

$peso=80; 
$altura=1.80;
$IMC= $peso / ($altura * $altura);

if ($IMC <= 18.5 ) {
    $peso / ($altura * $altura);
    echo "Está abaixo do peso";
}
elseif ($IMC <=24.9) {
    echo "Está no peso ideal";
}
else ($IMC <=29.9); {
    echo "Está acima do peso";
}




