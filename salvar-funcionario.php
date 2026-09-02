<?php

$nome = $_POST["nome"] ?? " ";
$email = $_POST["email"] ?? " ";

echo "$nome: $nome";
echo "<br>";
echo "$email: $email";


$htmlBotaoVoltar = '
        <br>
    <button type="button">
        <a href="/infoserv_php/form-funcionario.php">Voltar</a>
    </button>
';
echo $htmlBotaoVoltar;
