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
                    <input name="Nome livro" type="tetx"><hr>
                <label>Autor</label>
                    <input name="Nome Autor "type="text"><hr>
                <label>Nome do Aluno </label>
                    <input name="Nome Aluno" type="text"><hr>
                <label>Data de Retirada </label>
                    <input name="Data Retirada" type="date"
                    placeholder="00/00/00"><hr>
                <label>Data de Devolução </label>    
                    <input name="Data Devolucao" type="date"
                    placeholder="00/00/00"><br><br>

                <button type="submit"> Emprestar </button>
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
                     <input name= "digiteCpF" typ="text"><hr>
                <label>Celular</label>
                   <input name="digiteCelular" type="text"
                        placeholder="(00)00000-0000"><hr>
                <label>Data Nascimento</label>
                    <input name="dataNascimento" type="date"
                        placeholder="00/00/00"><hr>
                <label>Email</label>
                    <input name="Email" type="text"><br><br>
                
                <button type="submit" name="confirmar">Registrar</button>    
                <?php 
                    if(isset($_POST['confirmar'])){
                        $nome = $_POST['nomeAluno']; 
                        $cpf = $_POST['digiteCpF']; 
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

        <form action="biblioteca.php" method="post">
            <fieldset>
                <label>Título</label>
                    <input name="titulo" type="text"><hr>
                <label>Autor</label>  
                    <input name="autor" type="text"> 
                <label>Preço</label>
                    <input name="preco" type="text">
                <label>Numeros de Páginas</label>
                    <input name="numeroPaginas" type="text">
                <label>Ano Publicação</label>
                    <input name="anoPublic"type="text">
                <label>ISBN</label>
                    <input name="isbn" type="text">
                    
                <button type="submit" name="Cadastro">Cadastrar</button>
                <?php
                    if(isset($_POST['Cadastro'])){
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