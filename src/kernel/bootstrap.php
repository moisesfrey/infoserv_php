1<?php

session_start();

require_once "./src/config/conexao.php";
require_once "./src/database/BancoDeDados.php";
require_once "./src/models/funcionario/FuncionarioModel.php";

$bancoDeDados = new BancoDeDados($conexao);
$funcionariomodel = new FuncionarioModel($bancoDeDados);







