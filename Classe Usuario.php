<?php

class usuario{
    private $emailUsuario;
    private $senha;

    public function __construct($emailUsuario, $senha)
    {
        $this->emailUsuario = $emailUsuario;
        $this->senha = $senha;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function getEmailUSU(){
        return $this->emailUsuario;
    }

    public function mostrarInformacao(){
        echo '<b>Detalhes do Usuário</b>';
        echo '<br>';
        echo '<br>';
        echo '<b>Email:</b>'. $this->getEmailUSU().'<br>';
        echo '<b>Senha:</b>'. $this->getSenha();
    }
}