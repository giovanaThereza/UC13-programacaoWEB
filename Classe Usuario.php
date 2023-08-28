<?php

class usuario{
    private $emailUsuario;
    private $senha;

    public function __construct(aluno $email, usuario $senha)
    {
        $this->emailUsuario = $email;
    }

    public function getSenha(){
        return $this->senha;
    }
}