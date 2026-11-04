<?php

class UsuarioController extends BaseController
{
    private UsuarioModel $usuariomodel;
    private string $entity = UsuarioEntity::class;

    public function __construct(UsuarioModel $usuariomodel)
    {
        $this->usuariomodel = $usuariomodel;
    }

    public function listar(): void
    {
        try {
            $registros = $this->usuariomodel->listar();
            $funcionarios = $this->criarEntidades($this->entity, $registros);
        } catch (Exception $erro) {
            $Usuarios = [];

            $this->mensagemErro("Erro ao listar Usuarios: " . $erro->getMessage());
        }

        $this->view("Usuario/listar", [
            "Usuarios" => $Usuarios,
        ]);
    }

    public function novo(): void
    {
        $this->view("Usuario/form", [
            "titulo" => "Novo Usuario",
            "action" => url("/Usuarios"),
            "Usuario" => new UsuarioEntity(),
        ]);
    }

    public function criar(): void
    {
        try {
            $Usuario = $this->criarEntidadePeloPost($this->entity);

            $this->salvarEntidade($this->usuariomodel, $Usuario);

            $this->mensagemSucesso("Usuario cadastrado com sucesso!");

            $this->redirecionar("/Usuarios");
        } catch (Exception $erro) {
            $this->mensagemErro("Erro ao cadastrar Usuario: " . $erro->getMessage());

            $this->redirecionar("/Usuarios/novo");
        }
    }

    public function editar(int|string $id): void
    {
        try {
            $registros = $this->usuariomodel->listarPorId((int) $id);

            if (empty($registros)) {
                $this->mensagemErro("Usuario não encontrado.");

                $this->redirecionar("/Usuario");
            }

            $funcionario = $this->criarEntidade($this->entity, $registros[0]);

            $this->view("Usuario/form", [
                "titulo" => "Editar Usuario",
                "action" => url("/Usuario/{$id}"),
                "Usuario" => $usuario,
            ]);
        } catch (Exception $erro) {
            $this->mensagemErro("Erro ao buscar Usuario: " . $erro->getMessage());

            $this->redirecionar("/Usuario");
        }
    }

    public function atualizar(int|string $id): void
    {
        try {
            $Usuario = $this->criarEntidadePeloPost($this->entity);

            $this->atualizarEntidade($this->usuariomodel, $id, $Usuario);

            $this->mensagemSucesso("Usuario atualizado com sucesso!");

            $this->redirecionar("/Usuario");
        } catch (Exception $erro) {
            $this->mensagemErro("Erro ao atualizar Usuario: " . $erro->getMessage());

            $this->redirecionar("/Usuarios/{$id}/editar");
        }
    }

    public function deletar(int|string $id): void
    {
        try {
            $this->usuariomodel->excluir((int) $id);

            $this->mensagemSucesso("Usuario excluído com sucesso!");
        } catch (Exception $erro) {
            $this->mensagemErro("Erro ao excluir Usuario: " . $erro->getMessage());
        }

        $this->redirecionar("/Usuarios");
    }
}