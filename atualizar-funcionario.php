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



if(empty($idFuncionario))

$sql = "DELETE FROM  funcionario WHERE  id= $idFuncionario;";

$resultado = $conexao->query($sql);
$funcionario = (object) $resultado->fetch_assoc() ?? null;
retornarparalistagem();
function retornarparalistagem() {

$sql = "UPDATE funcionario";


header("Location: listar-funcionarios.php");

exit;
} 











