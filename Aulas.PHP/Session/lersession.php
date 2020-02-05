<?php 

session_start(); //session

$nome = $_SESSION['nome'] ?? 'Zé';  //quando não existir nome vai para ?? 

echo "Olá $nome"; 

/*
echo '<pre>';
var_dump($_SESSION);
*/
//abas não altera sessão

echo '<pre>';

var_dump($_SESSION);

