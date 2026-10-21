<?php

class FunionarioController extends BaseModel {
    protected FuncionarioModel $funcionarioModel;

    #[Override]
    public function __construct(FuncionarioModel $funcionariomodel)
    {
       $this->funcionarioModel = $funcionariomodel;
    }
    public function __construct

}


