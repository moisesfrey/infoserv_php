<?php

require_once "./conexao.php";
$objfncionario;


$idFuncionario = $_REQUEST["id"] ?? 0;

if(empty($idFuncionario))

$sql = "DELETE FROM  funcionario WHERE  id= $idFuncionario;";

$resultado = $conexao->query($sql);

retornarparalistagem();
function retornarparalistagem() {

header("Location: listar-funcionarios.php");

exit;
}