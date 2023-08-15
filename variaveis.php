<?php

$nomeCompleto = "Giovana Thereza";
$idade = 17;
$status = true;
$salario = 2000.00;

echo $nomeCompleto;

echo "<hr>";
//Converte em maisculo
echo strtoupper($nomeCompleto);

echo "<hr>";
//Converte em minusculo
echo strtolower($nomeCompleto);

echo "<hr>";
//Converte Letras Inicais em maisculas
echo ucwords($nomeCompleto);

echo "<hr>";
//Muda, substui e buscaa
echo str_replace("Giovana", "Joana", $nomeCompleto);

echo "<hr>";
//Comando para repetir quantas vezes quiser 
echo str_repeat("Giovana", 5);

echo "<hr>";

echo isset($nome) ? 'True':'False';

echo "<hr>";

echo empty($nomeCompleto) ? 'True':'False';

echo "<hr>";