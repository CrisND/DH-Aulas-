<?php

require 'conexao.php';

// validação
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$contato = $_POST['contato'];
$id = $_POST['id'];

$update =   'UPDATE clientes 
            SET 
            nome=?,  
            sobrenome=?, 
            cpf=?, 
            contato=? 
            WHERE 
            id=?';
// nome=:nome

//pode adicionar uma camada de validação para limpar o dado inserido 

$stmt = $con->prepare($update);

//$stmt ->bindValue(':nome', $nome);

$resultado = $stmt->execute([
    $nome, 
    $sobrenome, 
    $cpf, 
    $contato, 
    $id
]);

//$resultado = $stmt->execute();

if ($resultado) {
    header('Location: read.php');
} else {
    echo 'Erro ao inserir';
}

?>