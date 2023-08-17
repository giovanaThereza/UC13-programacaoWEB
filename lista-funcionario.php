<?php

include "Funcionario.php";

?>

<html>
    <head>
        <title>Lista de funcionários </title>
    </head>
    <body> 
        <h1> Lista de Funcionários</h1>

        <table border = "1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>
               <?php foreach ($listaFuncionarios as $Funcionario): ?> 
                    <tr>
                        <td><?=$Funcionario["id"] ?></td>
                        <td><?=$Funcionario["nome"]?></td>
                        <td><?=$Funcionario["email"]?></td>
                        <td><?=$Funcionario["telefone"]?></td>
                        <td>Editar Visualizar Excluir </td>
                    </tr>
                <?php endforeach; ?>
            <tbody>

            <tfoot>
            <tr> 
                <td colspan = "5"> Foi encontrado 5 funcionarios cadastrados </td>
            </tr>
            </tfoot>

        </table>
    </body>
</html>