<?php

class Funcionario {
    public $id;
    public $nome;
    public $sobrenome;
    private $salario;
    public $cargo;
    public $setor;
    protected $cracha;

    public function __construct()
    {
        echo "Salário __construct: ";
        echo $this->salario;
        echo "<br>";
    }

    public function __toString()
    {
        return "o nome é: " . $this->nome . "<br>";
    }

    public function obtersalario(){
        
    }

    public function setarsalario($salario) {
        $this->salario + $salario;
    }
}

$valor = 10;

$funcionario = new Funcionario();

$funcionario->nome = "Moises";

$funcionario->setarsalario(10200);

echo "Salário ";
$funcionario->obtersalario();


