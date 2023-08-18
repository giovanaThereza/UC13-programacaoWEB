<?php 

class Usuario {
    protected $nome; 
    private $senha; 
}

class aluno  {
    public $nome;
    private $cpf;
    protected $celular;
    protected $dataNascimento;
    public $email;
}

class livro {
    public $titulo;
    protected $autor;
    private $preco;
    public $numerosPaginas;
    public $anoPublic;
    protected $isbn;

    public function novoLivro(){
       $titulo = "Contos";
    }
}

class biblioteca {

    public $novoLivro;
    public $nome;

    public function __construct(livro $tituloLivro, aluno $nome )
    {
        $this->novoLivro = new livro();
        $this->novoLivro->titulo=$tituloLivro->titulo;
        $this->novoLivro->numerosPaginas=$tituloLivro->numerosPaginas;
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
        $this->aluno->nome = $aluno->nome; 
        $this->livro = $livro; 
        $this->livro->titulo = $livro->titulo; 
        /*$this->$titulo = "A Cinco Passos de Você";
        $this->$autor = "Rachael Lippincott";
        $this->$numerosPaginas = "288 páginas";
        $this->$anoPublic = "2019";
        $this->$nome = "Giovana Thereza";*/
        $this->dataRetirada = new DateTime();
        
    }

    public function fazerEmprestimo(){

    }
}