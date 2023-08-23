<?php 

require_once'classes/Classe Aluno.php';
require_once'classes/Classe Livro.php';
require_once'classes/Classe Emprestimo.php';

$aluno1 = new aluno("Giovana", 47918914813, 988129196, 2006-07-21, "giovanat@teste.com" );

$livro1 = new livro("A Seleção", "Kiera Cass", "34.90", "363", "2012", "258");

$aluno->addLivros($livro1);

$emprestimo = new emprestimo($aluno1, $livro1);

$empretimo->imprimirDetalhe();