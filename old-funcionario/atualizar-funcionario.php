<?php

require_once "./conexao.php";
$objfncionario;


$idFuncionario = $_REQUEST["id"] ?? 0;

$Nome = $_POST["nome"] ??"";
$Sobrenome = $_POST["Sobrenome"] ??"";
$Salário = $_POST["Salário"] ??"";
$Cargo  = $_POST["Cargo"] ??"";
$Setor = $_POST["Setor"] ??"";
$Crachá = $_POST["Crachá"] ??"";
$Açoes = $_POST["Açoes"] ??"";


if(empty($idFuncionario)) {
    retornarparalistagem();
}

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


$sql = "UPDATE funcionario SET";
$camposUpdate = "nome='$nome',sobrenome='$sobrenome, $salario=0, cargo='$cargo', setor='$setor', cracha='$cracha' ";
$where = "WHERE id=$idFuncionario LIMIT 1;";

$sql .= $camposUpdate;
$sql .= $where;

echo $sql;

$resultado = $conexao->query($sql);
$funcionario = (object) $resultado->fetch_assoc() ?? null;
retornarparalistagem();
function retornarparalistagem() {

$sql = "UPDATE funcionario";


header("Location: listar-funcionarios.php");

exit;
} 











