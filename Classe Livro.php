<?php
class livro {
    private $titulo;
    private $autor;
    private $preco;
    private $numerosPaginas;
    private $anoPublic;
    private $isbn;

    public function __construct($titulo, $autor, $preco, $numerosPaginas, $anoPublic, $isbn)
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

?>