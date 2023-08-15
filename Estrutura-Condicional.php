<?php

$nome = "Giovana Thereza";
$email = "giovanatherezagoncalves@gmail.com";
$senha = "2107";
$idade = 17;

echo "<h1>Estrutura Condicional<h1>";

//////////////////////////////////////////////////
echo "<hr>";
echo "<h5> Exemplo de if <h5>";

if($idade >= 18){
    echo "O usuário $nome é maior de idade";
}

/////////////////////////////////////////////////
echo "<hr>";
echo "<h5> Exemplo de if e else <h5>";

if($senha = "2107"){
    echo "A senha é valida";
}else{
    echo "Senha inválida";
}

///////////////////////////////////////////////////////////
echo "<hr>";
echo "<h5> Exemplo de if e ElseIf else  <h5>";

if($idade <= 18){
    echo "Jovem";
}else if($idade <= 21){
    echo "Adulto";
}else {
    echo "Velho";
}

////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h5> Exemplo de if Ternario <h5>";

echo ($idade >= 18) ? "Maior de Idade" : "Menor de idade";

/////////////////////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h5> Exemplo de condição para formulário de login <h5>";

if($email == "giovanatherezagoncalves@gmail.com" && $senha == "2107"){
    echo "Usuário autenticado";
}else {
    echo "Usuário ou senha inválido";
}

/////////////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h5> Verificar se o número é par ou ímpar <h5>";

$numero = 10;
//o numero 10 é par 

if($numero % 2 == 0){
    echo "O número $numero é par";
}else {
    echo "O número $numero é ímpar";
}

///////////////////////////////////////////////////////////////////////////////////
echo "<hr>";
echo "<h5> Mostre o dia da Semana <h5>";

$date = date('w');

if($date == '0'){
    echo "Hoje é Domingo";
}else if ($date == '1'){
    echo "Hoje é Segunda-feira";
}else if ($date == '2'){
    echo "Hoje é Terça-feira";
}else if ($date == '3'){
    echo "Hoje é Quarta-feira";
}else if ($date == '4'){
    echo "Hoje é Quinta-feira";
}else if ($date == '5'){
    echo "Hoje é Sexta-feira";
}else if ($date == '6'){
    echo "Hoje é Sabado";
}