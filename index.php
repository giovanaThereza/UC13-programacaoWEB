<html>
    <head>
       <meta charset="uft-8">
        <title>Biblioteca</title>
    </head>
        <body>
        <h1> Empréstimo </h1> 
        
        <form action="Biblioteca.php" method="post">
            <fieldset>
                <label>Nome do Livro </label>
                    <input name="nomeLivro" type="tetx"><hr>
                <label>Nome do Aluno </label>
                    <input name="nomeAluno" type="text"><hr>
                <label>Data de Retirada </label>
                    <input name="dataRetirada" type="date"
                    placeholder="00/00/00"><hr>
                <label>Data de Devolução </label>    
                    <input name="dataDevolucao" type="date"
                    placeholder="00/00/00"><br><br>

                <button type="submit" name="fazerEmprestimo">Confirmar </button>
                <?php
                    if(isset($_POST['fazerEmprestimo'])){
                        $aluno = $_POST['nomeAluno'];
                        $livro = $_POST['nomeLivro'];
                        $dataRetirada = $_POST['dataRetirada'];
                        $dataDevolucao = $_POST['dataDevolucao'];
                    }
                ?>
            </fieldset>
        </form>
        </body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Biblioteca</title>
    </head>
        <body>
            <h1>Cadastro Aluno</h1>

        <form action="Biblioteca.php" method="post"> 
             <fieldset>
                <label>Nome do Aluno</label>
                      <input name="nomeAluno" type="text"><hr>
                <label>CPF</label>    
                     <input name= "digiteCPF" typ="text"><hr>
                <label>Celular</label>
                   <input name="digiteCelular" type="text"
                        placeholder="(00)00000-0000"><hr>
                <label>Data Nascimento</label>
                    <input name="dataNascimento" type="date"
                        placeholder="00/00/00"><hr>
                <label>Email</label>
                    <input name="Email" type="text"><br><br>
                
                <button type="submit" name="cadastroAluno">Confirmar</button>    
                <?php 
                    if(isset($_POST['cadastroAluno'])){
                        $nome = $_POST['nomeAluno']; 
                        $cpf = $_POST['digiteCPF']; 
                        $celular = $_POST['digiteCelular']; 
                        $dataNascimento = $_POST['dataNascimento'];
                        $email = $_POST['Email'];

                        $aluno = new aluno($nome, $cpf, $celular, $dataNascimento, $email);
                    }
                ?> 
            </fieldset>
        </form>
        </body>
</html>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Biblioteca</title>
    </head>
        <body>
            <h1>Cadastro de Livro</h1>

        <form action="Biblioteca.php" method="post">
            <fieldset>
                <label>Título</label>
                    <input name="titulo" type="text"><br><hr>
                <label>Autor</label>  
                    <input name="autor" type="text"><br><hr>
                <label>Preço</label>
                    <input name="preco" type="text"><br><hr>
                <label>Numeros de Páginas</label>
                    <input name="numeroPaginas" type="text"><br><hr>
                <label>Ano Publicação</label>
                    <input name="anoPublic"type="text"><br><hr>
                <label>ISBN</label>
                    <input name="isbn" type="text"><br><hr>
                    
                <button type="submit" name="cadastroLivro">Confirmar</button>
                <?php
                    if(isset($_POST['cadastroLivro'])){
                        $titulo = $_POST['titulo'];
                        $autor = $_POST['autor'];
                        $preco = $_POST['preco'];
                        $numerosPaginas = $_POST['numeroPaginas'];
                        $anoPublic = $_POST['anoPublic'];
                        $isbn = $_POST['isbn'];
                        $livro = new livro ($titulo,$autor,$preco,$numerosPaginas, $anoPublic, $isbn);
                    }
                ?>    
            </fieldset>
        </form>                
        </body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Biblioteca</title>
    </head>
    <body>
        <h1>Login Usuário</h1> 
    <form action="Biblioteca.php" method="post">
        <fieldset>
            <label>Email</label>
                <input name="email" type="text"><hr>
            <label>Senha</label>
                <input name="senha" type="text">

                <button type="submit" name="login">Confirmar</button>
            <?php
                if(isset($_POST['login'])){
                    $emailUsuario = $_POST['Email'];
                    $senha = $_POST['senha'];
                }
            ?>
        </fieldset>
    </form>           
    </body>
</html>