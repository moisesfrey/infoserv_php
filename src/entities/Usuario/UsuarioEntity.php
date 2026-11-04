<?php

class UsuarioEntity
{
    private ?int $id = null;
    private string $nome = "";
    private string $Status = "";
    private string $CadastroCompleto = "";

    public static function criarPorDados(object|array $dados): self
    {
        $Usuario = new self();

        $Usuario->preencher($dados);

        return $Usuario;
    }

    public function preencher(object|array $dados): void
    {
        $dados = (object) $dados;

        $this->id = isset($dados->id) ? (int) $dados->id : $this->id;
        $this->nome = $dados->nome ?? $this->nome;
        $this->Status = $dados->Status ?? $this->Status;
        $this->CadastroCompleto = $dados->CadastroCompleto ?? $this->CadastroCompleto;
    }

    public function toArrayParaBanco(): array
    {
        return [
            "nome" => $this->nome,
            "Status" => $this->Status,
            "CadastroCompleto" => $this->CadastroCompleto,
        ];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEmail(): string
    {
        return $this->Status;
    }

    public function getTelefone(): string
    {
        return $this->CadastroCompleto;
    }

}