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

class livro {
    private $titulo;
    private $autor;
    private $preco;
    private $numerosPaginas;
    private $anoPublic;
    private $isbn;

    public function __construct(livro $titulo, $autor, $preco, $numerosPaginas, $anoPublic, $isbn)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->preco = $preco;
        $this->numerosPaginas = $numerosPaginas;
        $this->anoPublic = $anoPublic;
        $this->isbn = $isbn;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function getPreco(){
        return $this->preco;
    }
    
    public function getNumerosPaginas(){
        return $this->numerosPaginas;
    }

    public function getAnoPublic(){
        return $this->anoPublic;
    }

    public function getIsbn(){
        return $this->isbn;
    }
}

class emprestimo {
    
    public $aluno; 
    public $livro; 
    public $dataRetirada;
    public $dataDevolucao;
    
    public function __construct(livro $livro, aluno $aluno)
    {
        $this->aluno = $aluno;
        $this->livro = $livro; 

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

    public function imprimirDetalhe (){
        $this->dataEmprestimo();

        echo '<b>Detalhes do Empréstimo:<hr></b>';
        echo '<b>Aluno<br></b>';
        echo '<b>Nome do Aluno:</b>'. $this->aluno->getNome().'<br>';
        echo '<b>Email do aluno:'. $this->aluno->getEmail().'<hr>';

        echo '<b>Livro<br></b>';
        echo '<b>Título do Livro:</b>'. $this->livro->getTitulo().'<br>';
        echo '<b>Autor:</b>'. $this->livro->getAutor().'<hr>';

        echo '<b>Data de Empréstimo</b>'. $this->dataRetirada.'<br>';
        echo '<b>Data Devolução</b>'. $this->dataDevolucao;
    }

}
