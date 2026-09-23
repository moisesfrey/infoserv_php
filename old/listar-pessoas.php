<?php

require_once "conexao.php";

$sql = "SELECT * FROM pessoa;";

$resultado = $conexao->query($sql);

while ($pessoa = (object) $resultado->fetch_assoc()){
    $objpessoa = (object) $pessoa;

    echo "$objpessoa->nome  <br>";
}





