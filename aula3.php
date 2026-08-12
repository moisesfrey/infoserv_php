<?php

$nota = 7;

switch ($nota) {
    case $nota >= 7;
        echo "Aprovado";
        break;

    case $nota >= 5;
         echo "Recuperação";
         break;

    default:
         echo "Reprovado";
         break;
} 

    
$perfil = "admin";
 if ($perfil == "admin") {
     echo " É Administrador!";    
 }
 elseif ($perfil== "usuario") {
    echo "É usuario comum!";
 }
 else {
    echo "É desconhecido!";
 }
 
/**
 * utilizar o operador mmodulo %
 * para descobrir se o numero informado pelo usuario é par
 * se for par exibir é par e o número lido,senao exibir é impar e o numero lido.
 */
 
echo "<br>";

$numero = 15;
$resto = $numero%2;


if ($resto ==0 ) {
    echo "É par " . $numero;
    echo "<br>";
}
else {
    echo"É impar" . $numero;
}

/**
 * calcular o fatorial de 5 (5!)
 * 5 *4 *3 *2 *1 = 120;
 * utilizar laço de repetição
 */

$numero = 5;
$fatorial = 0; 

for ($numero = 5; $numero > 0; $numero--) {
    $fatorial = $numero; 
}