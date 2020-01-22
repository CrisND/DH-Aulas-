<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
</head>
<body>

<?php 
echo '<h1>Hello World</h1>'; 

$_INT = 12; 
$_FLU = 2.4; 

$booleano = true; //false

/*
Comentario em blocos 
Escrevam usando o PHP os inputs necessários para o formulário 
*/
?>

<form action="">
    <label for="">Nome</label>
        <?php echo '<input type="text" name="nome">'; ?>
    <br>
    <label for="">Email</label>
        <?php echo '<input type="email" name="email">'; ?>
</form>

<?php

//Condicionais 
$status = true; 

?>

<br>

<?php 
    if ($status === true) {
        echo '<div style="width: 100px; background-color: green;">Ativo</div>';
    } else {
        echo '<div style="width: 100px; background-color: red;">Inativo</div>';
    }
?>







</body>
</html>