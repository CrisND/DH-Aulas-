<?php 


session_start(); //sempre encima 

unset($_SESSION['logado']); //destroi somente o elemento logado da array de sessão | destroi uma variavel específica

//session_destroy();

?>