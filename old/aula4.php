<?php

use function PHPSTORM_META\argumentsSet;

$contador = 1;

for($contador = 0; $contador <=5; $contador++) {
     echo $contador . "<br>";
}

echo "<br>";

for ($contador = 5; $contador >=0; $contador--) {
    echo "$contador <br>";
}
echo "<br>";
$contador = 0; 

while($contador <= 5 ) {
    echo $contador . "<br>";
    $contador++;
}
echo "<br>";
$contador = 5; 

while($contador >= 0) {
    echo $contador . "<br>";
    $contador--;
}
echo "<br>";


$funcionarios = []; // array vazio
$funcionarios = [123, 25]; // tamanho 2
$funcionarios = ["Ariel", "Maria", "Joao",]; // 3
//                  0        1        2


foreach($funcionarios as $funcionario) {
    echo $funcionario . "<br>";
}
echo "FOR<br>";
for($i =0; $i < count($funcionarios); $i++) {
    echo $funcionarios [$i] . "<br>"; 
}

echo "<br>";

$funcionairosArrayAssociativo = [
    "nome" => "Ariel",
    "cargo" => "Professor",
    "salario" => "5000"
];
foreach($funcionarios as $funcionario) {
    echo $funcionario . "<br>";
}
foreach($funcionairosArrayAssociativo as $chave => $funcionario ) {
    echo "$chave: $funcionario <br>";
}



echo"<br>";
echo $funcionarios [0];
echo $funcionarios [1];
echo $funcionairosArrayAssociativo ["nome"];
echo $funcionairosArrayAssociativo ["cargo"];

echo "<br>";

/**
 * utilizar o array anterior e aplicar os itens a baixo.
 * conceder 10 % de aumento para cada funcionario 
 * adicionar setor do funcionario 
 * adicionar desconto do inss do funcionario.
 */


$funcionairosArrayAssociativo = [
    "nome" => "Ariel",
    "salario" => "5000",
    "setor" => "educação",
    "cargo" => "Professor",
     "Desconto INSS" => "230",
];
$Percentual = 10;
$Percentualaumento = $Percentual /100;
$salario = $funcionairosArrayAssociativo["salario"];
$aumento = $salario * $Percentualaumento;
$aumentoformat= formatarParaReal($aumento);
$novosalario = formatarParaReal($salario + $aumento);
$salarioantigo = formatarParaReal($salario);

echo"R$ ". formatarParaReal(10.49);

echo "O salario era de $salarioantigo o aumento foi de $aumento e seu novo salario é: $novosalario";

function formatarParaReal(float $valor): string {
    $valorformatado = number_format($valor, 2, ',', '.');
    return $valorformatado;
}



echo "<br>";


function somar(float $a, float $b):float
{
    return $a + $b;
}
$resultado = somar(10, 5);

echo "o valor da soma é $resultado";

echo "<br>";

function dividir(float $a, float $b):float 
{
    return $a / $b;
}
$resultado = dividir(6, 3);

echo "o valor da divisao é $resultado";

echo "<br>";


function subtrair(float $a, float $b):float
{
    return $a - $b;
}
$resultado = subtrair(8, 4);

echo "o valor da subtraçao é $resultado";

echo "<br>";

function multiplicaçao(float $a, float $b):float 
{
    return $a * $b;
}
$resultado = multiplicaçao(4, 2);

echo "o valor da multiplicaçao é $resultado";



function tabuada(float $numero, float $limite = 10)
{
    for ($i = 1; $i <= $limite; $i++ ) {
        $resultado = $numero * $i;
        echo "$numero X $i = $resultado <br>";
    }   
}
 echo "<br>";
tabuada(5);

function mediaAritimetica($valor1, $valor2, $valor3) {
    $mediaAritimetica = ($valor1 + $valor2 + $valor3);
}



echo "<br>";






    function mediaPonderada($prova1, $prova2, $prova3) {}
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








function calcularsalario($salario, $bonus, $desconto){
    $salariofinal = $salario + $bonus - $desconto;
}