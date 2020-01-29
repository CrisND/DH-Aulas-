<?php 

session_start();

$nome = $_SESSION['nome'] ?? 'Zé';

echo "Olá $nome"; 

/*
echo '<pre>';
var_dump($_SESSION);
*/
//abas não altera sessão