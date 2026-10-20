<?php
require_once "./conexao.php";

$idFuncionario = $_REQUEST["id"] ?? 0;

$sql = "DELETE FROM  funcionario WHERE  id=$idFuncionario LIMIT 1;";

$resultado = $conexao->query($sql);

$funcionario = (object) $resultado->fetch_assoc();

echo $funcionario->nome;

?>

<h1>Editar Funcionário</h1>

<br><br>

<?php

    if(empty($resultado )) {

?>

<p>funcionario não encontrado</p>

<?php } else { ?>
    <form method="POST" action="atualizar-funcionario.php">
        <input type="text" hidden value="<?= $idFuncionario ?>">
        <input type="text" name="nome" id="nome" value="<?=  $funcionario->nome ?>

    </form>
    
<?php } ?>