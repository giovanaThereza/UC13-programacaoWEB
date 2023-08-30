<?php
class livro {
    private $titulo;
    private $autor;
    private $preco;
    private $numerosPaginas;
    private $anoPublic;
    private $isbn;
    private $livros = []; 

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

    public function addlivro(livro $livro){
        return $this->livros[] = $livro;
    }

    public function ImprimirDetalhesLVR(){
        echo '<b>Detalhes do Livro</b>';
        echo '<br>';
        echo '<br>';
        echo '<b>Título:</b>'. $this->getTitulo().'<br>';
        echo '<b>Autor:</b>'. $this->getAutor().'<br>';
        echo '<b>Preço:</b>'. $this->getPreco().'<br>';
        echo '<b>Numeros de Páginas:</b>'. $this->getNumerosPaginas(). '<br>';
        echo '<b>Ano Publicação:</b>'. $this->getAnoPublic().'<br>';
        echo '<b>ISBN:</b>'. $this->getIsbn();
    }
}

?>