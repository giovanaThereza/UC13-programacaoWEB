<html>
    <head>
        <title>Aula de PHP

        </title>

    </head>
    <body>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia laudantium cupiditate minima commodi nisi soluta in, nobis corporis tempora doloribus nihil suscipit placeat dolor quae facere inventore deserunt eius eum?</p>
        <?php
            echo "Giovana Thereza";
        ?>
        <br>

        <?php

            print "Senac Marília";
        ?>
        
        <br>

        <!-- Comentário em HTML -->
        <?php

        // Comentário em PHP

        /*
            Gatinhos são fofos
            Cachorrinhos também
        */

        $nomeCompleto = "Giovana Thereza";
        $idade = 17;
        $status = true;
        $salario = 1500.20;

        echo $nomeCompleto." ".$idade;
        echo "<br>";
        echo "$nomeCompleto $idade anos";

        $logoSenac = "https://www.sp.senac.br/o/senac-theme/images/logo_senac_default.png";

        ?>

        <img src="<?=$logoSenac ?>" alt="Senac Marília">
        
    </body>    

</html>