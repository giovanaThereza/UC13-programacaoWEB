<?php

class aluno  {
    private $nome;
    private $cpf;
    private $celular;
    private $dataNascimento;
    private $email;
    private $livros = [];

    public function __construct(aluno $nome, $cpf, $celular, $dataNascimento, $email)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->celular = $celular;
        $this->dataNascimento = $dataNascimento;
        $this->email = $email;
    }

    public function getNome (){
        return $this->nome;
    }

    public function getCPF (){
        return $this->cpf;
    }

    public function getCelular (){
        return $this->celular;
    }

    public function getDataNascimento (){
        return $this->dataNascimento;
    }

    public function getEmail (){
        return $this->email;
    }

    public function addLivros (aluno $livros){
        return $this->livros = $livros;
    }

}

?>