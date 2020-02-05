<?php


//Sempre que for usar sessão chamar esta função
session_start();

$_SESSION['nome'] = 'Cris'; 

$_SESSION['logado'] = true; //condicionado login e senha batendo 