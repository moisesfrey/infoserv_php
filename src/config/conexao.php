<?php

$servidor = "localhost"; // servidor 
$usuario = "aluno";
$senha = "1234";
$bancodedados = "infoserv";


$conexao = new mysqli($servidor, $usuario, $senha, $bancodedados);

if($conexao->connect_error) {
    die ("Erro ao conectar no banco de dados($bancodedados): " . $conexao->connect_error);
}

$conexao->set_charset("utf8mb4");




