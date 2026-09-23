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
 * utilizar o operador modulo %
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

echo "<br>";

/**
 * calcular o fatorial de 5 (5!)
 * 5 *4 *3 *2 *1 = 120;
 * utilizar laço de repetição
 */

$numero = 5;
$fatorial = 1; 

for ($numero = 5; $numero > 0; $numero--) {
    $fatorial = $fatorial * $numero; 
}
echo "o fatorial é: " . "$fatorial";





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
else {
    echo "Está acima do peso";
}

echo"<br>";


/**
 * criar um algoritimo que vai simular o funcionamento de uma calculadora.
 * utilizar somente os operadores aritiméticos basicos sendo eles:
 * operadores: + - * /
 * 
 *após o calculo exibir o resultado da operação. 
 * dica:utilizar if e else ou switch case
 * o simulador irá possuir 4 variáveis: $operador,$$resultado,$valorA e $valorB
 */
  

$operador = "+";
$resultado = 0;
$valorA = 10;
$valorB = 10;

if ($operador =="+"){
    $resultado = $valorA + $valorB;
    echo "o resultado da operação de $operador é: $resultado";
}
else if ($operador =="-") {
    $resultado = $valorA - $vallorB;
    echo"o resultado da operação de $operador é: $resultado";
}
else if ($operador == "*") {

}
else if ($operador == "/") {

}
else ()







/**calcular a area de um quadrado e exibir o resultado.
 * com a mensagem:a area do quadrado é:
 */

$ladoA = 5;
$ladoB = 5;
$area = $ladoA * $ladoB;
echo" A Àrea do quadrado é $area";

echo"<br>";


/**calcular a area de um triangulo equilátero. e exibir o resultado
 * com a mensagem: a área do quadrado é 
 */

echo "<br>";
$area = ($base * $altura) / 2;
$altura = 3;
$base = 3;


/**
 * calcular a media aritimética, harmonica  ponderada de um aluno.
 * avaliar se este aluno passsou, esta em recuperação ou foi reprovado
 * a média para passar é 7. recuperação é 5 e reprovar é abaico de 5.
 */


$prova1 = 10;
$prova2 = 10;
$prova3 = 10;

$peso1 = 2;
$peso2 = 4;
$peso3 = 6;

$numerador = ($prova1 * $peso1) + ($prova2 * $peso2 ) + ($prova3 * $peso3);
$denominador = $peso1 + $peso2 + $peso3;
$mediaponderada = $numerador / $denominador;

if ($mediaponderada  >=7) {
    echo "o aluno foi aprovado com a média ponderada:$mediaponderada"; 
}
elseif ($mediaponderada >=5) {
    echo"o aluno está em recuperação com a média ponderada:$mediaponderada";
}
else {
    echo "o aluno está reprovado com a média ponderada: $mediaponderada";
}
echo"<br>";

$prova1=10;
$prova2=10;
$prova3=10;


$numerador = // quantidade de provas
$denominador = $prova1 + $prova2 + $prova3;
$mediaharmonica = $numerador / $denominador;

if ($mediaharmonica >=7) {
    echo "o aluno foi aprovado com a média ponderada:$mediaharmonica"; 
}
elseif ($mediaponderada >=5) {
    echo"o aluno está em recuperação com a média ponderada:$mediaharmonica";
}
else {
    echo "o aluno está reprovado com a média ponderada: $mediaharmonica";
}

