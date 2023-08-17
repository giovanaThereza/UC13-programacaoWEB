<?php 

$listaFuncionarios = [
     [
        "id" => 1,
        "nome" => "Giovana Thereza",
        "email" => "giovanatgms@gmail.com",
        "telefone" => "(14) 988129196"      
    ],

    [
        "id" => 2,
        "nome" => "Adalberto Lima",
        "email" => "adalbertolima@gmail.com",
        "telefone" => "(14) 999999999"
    ],

    [
        "id" => 3,
        "nome" => "Renata Martins",
        "email" => "renatam@test.com",
        "telefone" => "(14) 555555555"
    ],

    [
        "id" => 4,
        "nome" => "Adriano Andrade",
        "email" => "adrianoandrade@test.com",
        "telefone" => "(14) 888888888"
    ],
    
];

//Adicionando um item no array pronto
$qtdeFuncionario = count ($listaFuncionarios);

$listaFuncionarios[$qtdeFuncionario]["id"] = 4;
$listaFuncionarios[$qtdeFuncionario]["nome"] = "Gustavo Messias";
$listaFuncionarios[$qtdeFuncionario]["email"] = "gustavomessias@teste.com";
$listaFuncionarios[$qtdeFuncionario]["telefone"] = "(14) 666666666";
    
//var_dump($listaFuncionarios);