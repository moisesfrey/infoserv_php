<?php

require_once "./conexao.php";

$idFuncionario = $_POST["id"] ?? 0;
$nome = $_POST["nome"] ?? "";
$sobrenome = $_POST["sobrenome"] ?? "";
$cargo = $_POST["cargo"] ?? "";
$setor = $_POST["setor"] ?? "";
$salario = $_POST["salario"] ?? "";
$cracha = $_POST["cracha"] ?? "";

if(empty($Nome)) {
    retornarparalistagem();
}

if(empty($Sobrenome)) {
    retornarparalistagem();
}

if(empty($Salário)) {
    retornarparalistagem();
}

if(empty($Cargo)) {
    retornarparalistagem();
}

if(empty($Setor)) {
    retornarparalistagem();
}

if(empty($Crachá)) {
    retornarparalistagem();
}

if(empty($Açoes)) {
    retornarparalistagem();
}


$sql = "INSERT INTO funcionario ";
$campos = "(nome, sobrenome, salario, cargo, setor, cracha) ";
$valores = "VALUES ('$nome', '$sobrenome', '$salario', '$cargo', '$setor', '$cracha');";

$sql .= $campos . $valores;

$resultado = $conexao->query($sql);

header("Location: listar-funcionarios.php");
retornarparalistagem();
function retornarparalistagem() {

$sql = "UPDATE funcionario";


header("Location: listar-funcionarios.php");

exit;
} 
