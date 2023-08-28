<?php

class emprestimo {
    
    private $aluno; 
    private $livro; 
    public $dataRetirada;
    public $dataDevolucao;
    
    public function __construct(livro $livro, aluno $aluno)
    {
        $this->livro = $livro; 
        $this->aluno = $aluno;

    }

   public function getAluno(){
        return $this->aluno; 
    }

    public function getLivro(){
        return $this->livro;
    }

    public function getDataRetirada(){
        return $this->dataRetirada;
    }

    public function getDataDevolucao(){
        return $this->dataDevolucao;
    }

    public function dataEmprestimo(){
        $dataRetirada = new Datetime();
        $dataDevolucao = clone $dataRetirada;
        $dataDevolucao-> add (new DateInterval('P1M'));
        $this->dataRetirada = $dataRetirada-> format('d-m-y');
        $this->dataDevolucao = $dataDevolucao-> format('d-m-y');
    }

    public function imprimirDetalhe(){
        $this->dataEmprestimo();

        echo '<b>Detalhes do Empréstimo <br></b>';
        echo '<b>Nome do Aluno:'. $this->aluno->getNome().'<br>';
        echo '<b>Email do aluno:'. $this->aluno->getEmail().'<hr>';
        echo '<b>Título do Livro:'. $this->livro->getTitulo().'<br>';
        echo '<b>Autor:'. $this->livro->getAutor().'<hr>';
        echo '<b>Data de Empréstimo'. $this->dataRetirada.'<br>';
        echo '<b>Data Devolução'. $this->dataDevolucao;
    }
}
?>