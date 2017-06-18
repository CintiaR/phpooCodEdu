<?php
include_once 'cliente.php';

$clientes = array();

for ($i = 1; $i<=10; $i++){
    $clientes[$i] = new cliente();
    $clientes[$i]->nome = "Cliente$i";
    $clientes[$i]->cpf = "CFP$i";
    $clientes[$i]->endereco = "endereco$i";
    $clientes[$i]->telefone = "telefone$i";
    $clientes[$i]->email = "email$i";
}

var_dump($clientes);