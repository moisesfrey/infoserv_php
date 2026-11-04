<?php

class HomeController extends BaseController
{
    public function listar(): void
    {
        $dados = [
            "funcionarios" => "Funcionários",
            "pessoas" => "Pessoas",
            "Usuarios" => "Usuarios"
    ];

        $this->view("home", [
            "dados" => $dados,
        ]);
    }

}