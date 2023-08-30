<?php 

require_once'Classe Aluno.php';
require_once'Classe Livro.php';
require_once'Classe Emprestimo.php';

if(isset($_POST['fazerEmprestimo'])){
    $nome = $_POST['nomeAluno'];
    $titulo = $_POST['nomeLivro'];
    $dataRetirada = $_POST['dataRetirada'];
    $dataDevolucao = $_POST['dataDevolucao'];

    $aluno = new aluno($nome, " ", " ", " ", " ");
    $livro = new livro($titulo, " ", " ", " ", " ", " "); 

    $emprestimo = new emprestimo($livro, $aluno);
    $emprestimo->imprimirDetalhe();
}
?>

<?php 

require_once'Classe Aluno.php';

if(isset($_POST['cadastroAluno'])){
    $nome = $_POST['nomeAluno']; 
    $cpf = $_POST['digiteCPF']; 
    $celular = $_POST['digiteCelular']; 
    $dataNascimento = $_POST['dataNascimento'];
    $email = $_POST['Email'];

    $aluno = new aluno($nome, $cpf, $celular, $dataNascimento, $email);
    $aluno->addAluno($aluno); 
    $aluno->ImprimirDetalhes(); 
    echo "<hr>"; 
}
?>

<?php 

require_once'Classe Livro.php';

if(isset($_POST['cadastroLivro'])){
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $preco = $_POST['preco'];
    $numerosPaginas = $_POST['numeroPaginas'];
    $anoPublic = $_POST['anoPublic'];
    $isbn = $_POST['isbn'];

    $livro = new livro ($titulo,$autor,$preco,$numerosPaginas, $anoPublic, $isbn);
    $livro->addlivro($livro);
    $livro->ImprimirDetalhesLVR();
    echo "<hr>";
}
?>

<?php

require_once'Classe Usuario.php';

if(isset($_POST['login'])){
    $emailUsuario = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = new usuario($emailUsuario, $senha);
    $usuario->mostrarInformacao();
    echo "<hr>";
}
?>
<html>
    <body>
        <form action = "index.php" method = "get">
        <button type="submit">Voltar</button>
        </form>
    </body>
</html>