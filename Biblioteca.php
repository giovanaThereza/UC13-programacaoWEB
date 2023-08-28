<?php 

require_once'Classe Aluno.php';
require_once'Classe Livro.php';
require_once'Classe Emprestimo.php';

$aluno1 = new aluno("Giovana", 47918914813, 988129196, 2006-07-21, "giovanat@teste.com" );

$livro1 = new livro("A Seleção", "Kiera Cass", "34.90", "363", "2012", "258");

$aluno1->addLivros($livro1);

$emprestimo = new emprestimo($livro1, $aluno1);

$emprestimo->imprimirDetalhe();

?>

<?php 

require_once'Classe Aluno.php';

if(isset($_POST['confirmar'])){
    $nome = $_POST['nomeAluno']; 
    $cpf = $_POST['digiteCpF']; 
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

if(isset($_POST['Cadastro'])){
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