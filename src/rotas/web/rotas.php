<?php

return [
    ['GET', '/', function () {
        echo "<h1>Página inicial</h1>";
        echo "<a href='" . url("/funcionarios") . "'>Funcionários</a>";
    }],

        ['GET', '/', function () {
        echo "<h1>Página inicial</h1>";
        echo "<a href='" . url("/controllers") . "'>PessoaController.php</a>";
    }],


    ['GET', '/funcionarios', [$funcionarioController, 'listar']],
    ['GET', '/funcionarios/novo', [$funcionarioController, 'novo']],
    ['POST', '/funcionarios', [$funcionarioController, 'criar']],
    ['GET', '/funcionarios/{id}/editar', [$funcionarioController, 'editar']],
    ['POST', '/funcionarios/{id}', [$funcionarioController, 'atualizar']],
    ['POST', '/funcionarios/{id}/deletar', [$funcionarioController, 'deletar']],

    ['GET', '/pessoa', [$PessoaController, 'listar']],
    ['GET', '/pessoa/novo', [$PessoaController, 'novo']],
    ['POST', '/pessoa', [$PessoaController, 'criar']],
    ['GET', '/pessoa/{id}/editar', [$PessoaController, 'editar']],
    ['POST', '/pessoa/{id}', [$PessoaController, 'atualizar']],
    ['POST', '/pessoa/{id}/deletar', [$PessoaController, 'deletar']]


];