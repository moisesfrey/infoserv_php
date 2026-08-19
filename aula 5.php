<?php

/**
 * calcular e exibir a tabuada do 5 utilizando FOR 
 * resultado esperado:
 * 5X1=5
 * 5x2=10
 * 5x3=15
 * etc
 * 
 * calcular e exibir todos os numeros pares de 2 até 50
 * sem pular de 2 em 2 no FOR;
 * dica:utilizar formula dos numeros pares
 */
   
/**
 * calcular e exibir os 5 primeiros numeros primos 
 * dica: utilizar formula dos numeros pares 
 */

$tabuadado5 = 5;

for ($i = 1; $i <= 10; $i++ ) {
    $resultado = $numero * $i;
    echo "$numero X $i = $resultado <br>";
}

echo "<br>";

for ($numero = 2; $numero <=50; $numereo++) {
    $resto = $numero % 2;
    $ehpar = 
    $resto ==0;

    if($ehpar){
        echo "o $numero é par. <br>";
    }
}

echo "<br>";