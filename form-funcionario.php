<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Formulário do Funcionário</title>
</head>
<body>
    <h1>Cadastro</h1>

    <form method="POST" action="salvar-funcionario.php">
        <div class="col-lg-3 col-md-4 col-sm-3 col-xs-3" >
        <div>
            <label for=" ">Nome</label>
            <input type="text" name="nome" id= "nome">
        </div>
        <br>
        <div>
              <div>
            <label for=" ">Sobrenome</label>
            <input type="text" name="Sobrenome" id= "Sobrenome">
        </div>
        <br>
        <div>
              <div>
            <label for=" ">Cargo</label>
            <input type="text" name="Cargo" id= "Cargo">
        </div>
        <br>
        <div>
              <div>
            <label for=" ">Setor</label>
            <input type="text" name="Setor" id= "Setor">
        </div>
        <br>
        <div>
              <div>
            <label for=" ">Salario</label>
            <input type="text" name="Salario" id= "Salario">
        </div>
        <br>
        <div>
              <div>
            <label for=" ">Cracha</label>
            <input type="text" name="Cracha" id= "Cracha">
        </div>
        <br>
        <div>

 <button type="submit">Enviar</button>
    </form>
</body>
</html>



