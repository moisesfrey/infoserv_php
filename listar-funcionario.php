<?php

require_once "./conexao.php";
$sql = "SELECT * FROM  funcionario;";

$resultado = $conexao->query($sql);

?>

<h1>funcionarios</h1>
<a href="form-funcionario.php">Novo funcionario</a>

<br><br>

<?php
    if (empty($resultado)) {
 ?>
<p>Sem dados para exibir.</p>
    <?php } else { ?> 

<table border="1" cellpading="8">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Salário</th>
        <th>Cargo</th>
        <th>Setor</th>
        <th>Crachá</th>
        <th>Açoes</th>
    </tr>

<?php
    while($funcionario = $resultado->fetch_assoc()){
        $objfncionario = (object) $funcionario;
        $idFuncionario = $objfncionario->id;
    ?>

    <tr>
        <td><?=  $objfncionario->id ?></td>
        <td><?=  $objfncionario->nome ?></td>
        <td><?=  $objfncionario->sobrenome ?></td>
        <td><?=  $objfncionario->salario ?></td>
        <td><?=  $objfncionario->id ?></td>
        <td><?=  $objfncionario->id ?></td>
        <td><?=  $objfncionario->id ?></td>
        <td><?=  $objfncionario->id ?></td>
        <td>   
            <a href="editar-funcionario.php?id="=<?php echo $idFuncionario ?>"</a>
             <a href="deletar-funcionario.php?id=">Excluir</a>
        </td>
    </tr>
    <?php } ?>
</table>

 <?php } ?>