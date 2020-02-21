<?php 

$email = 'teste@teste.com'; 
$senha = '12456'; 

$con = new PDO ('mysql:dbname=aulapdo;port=3307', 'root', '');

// Placeholder
$SELECT = 'SELECT * FROM login WHERE email=? AND senha=?'; //"?" classe pdo - medida de segurança

$resultado = $con->prepare($SELECT); // para formulário - exec e resgatar 

$resultado->execute([$email, $senha]);

var_dump($resultado->rowCount()); //rowCount comparação direta com o banco de dado - mais seguro 

?>