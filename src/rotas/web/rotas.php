<?php

return [

    ['GET', '/', [$homeController, 'listar']],

    ['GET', '/funcionarios', [$funcionarioController, 'listar']],
    ['GET', '/funcionarios/novo', [$funcionarioController, 'novo']],
    ['POST', '/funcionarios', [$funcionarioController, 'criar']],
    ['GET', '/funcionarios/{id}/editar', [$funcionarioController, 'editar']],
    ['POST', '/funcionarios/{id}', [$funcionarioController, 'atualizar']],
    ['POST', '/funcionarios/{id}/deletar', [$funcionarioController, 'deletar']],

    ['GET', '/pessoas', [$pessoaController, 'listar']],
    ['GET', '/pessoas/novo', [$pessoaController, 'novo']],
    ['POST', '/pessoas', [$pessoaController, 'criar']],
    ['GET', '/pessoas/{id}/editar', [$pessoaController, 'editar']],
    ['POST', '/pessoas/{id}', [$pessoaController, 'atualizar']],
    ['POST', '/pessoas/{id}/deletar', [$pessoaController, 'deletar']],

    ['GET', '/Usuario', [$usuariocontroller, 'listar']],
    ['GET', '/Usuarios/novo', [$usuariocontroller, 'novo']],
    ['POST', '/Usuarios', [$usuariocontroller, 'criar']],
    ['GET', '/Usuarios/{id}/editar', [$usuariocontroller, 'editar']],
    ['POST', '/Usuarios/{id}', [$usuariocontroller, 'atualizar']],
    ['POST', '/Usuarios/{id}/deletar', [$usuariocontroller, 'deletar']],
];
