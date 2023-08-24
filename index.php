<html>
    <head>
       <meta charset="uft-8">
        <title>Biblioteca</title>
    </head>
        <body>
        <h1> Empréstimo </h1> 
        
        <form action="Biblioteca.php" method="post">
            <fieldset>
                <legend>Nome do Livro </legend>
                    <input name="Nome livro" type="tetx"><hr>
                <legend>Autor</legend>
                    <input name="Nome Autor "type="text"><hr>
                <legend>Nome do Aluno </legend>
                    <input name="Nome Aluno" type="text"><hr>
                <legend>Data de Retirada </legend>
                    <input name="Data Retirada" type="date"
                    placeholder="00/00/00"><hr>
                <legend>Data de Devolução </legend>    
                    <input name="Data Devolucao" type="date"
                    placeholder="00/00/00"><br><br>

                <button type="submit"> Emprestar </button>
            </fieldset>
        </form>
        </body>
</html>