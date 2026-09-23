<?php

$nome = $_POST["nome"] ?? " ";
$sobrenome = $_POST["sobrenome"] ?? " ";
$cargo = $_POST["cargo"] ?? " ";
$setor = $_POST["setor"] ?? " ";
$salario = $_POST["salario"] ?? " ";
$cracha = $_POST["cracha"] ?? " ";

echo "$nome: $nome";
echo "<br>";
echo "$sobrenome: $sobrenome";
echo "<br>";
echo "$cargo: $cargo";
echo "<br>";
echo "$setor: $setor";
echo "<br>";
echo "$salario: $salario";
echo "<br>";
echo "$cracha: $cracha";
echo "<br>";




$htmlBotaoVoltar = '
        <br>
    <button type="button">
        <a href="/infoserv_php/form-funcionario.php">Voltar</a>
    </button>
';
echo $htmlBotaoVoltar;
