<?php

class aluno  {
    private $nome;
    private $cpf;
    private $celular;
    private $dataNascimento;
    private $email;
    private $livros = [];
    private $aluno = [];

    
    public function __construct($nome, $cpf, $celular, $dataNascimento, $email)
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

    public function addLivros (livro $livros){
        return $this->livros[] = $livros;
 
    }

    public function addAluno(aluno $aluno){
        return $this->aluno[] = $aluno;
    }

    public function ImprimirDetalhes(){

        echo '<b>Detalhes Alunos</b>';
        echo '<br>';
        echo '<br>';
        echo '<b>Nome do Aluno:</b>'. $this->getNome().'<br>';
        echo '<b>Email do aluno:</b>'. $this->getEmail().'<br>';
        echo '<b>Cpf:</b>'. $this->getCPF(). '<br>';
        echo '<b>Celular:</b>'. $this->getCelular(). '<br>';
        echo '<b>Data Nascimento:</b>'. $this->getDataNascimento();
    }
}
  
?>

