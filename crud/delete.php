<?php

require 'conexao.php';

$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// relatório em caso de erro - exibir error 

//passo 1 
$deleteEndereco = 'DELETE FROM enderecos WHERE cliente_id=?'; // ? para proteger o acesso ao banco aos externos que fica na URL 

$id = $_GET['id'];

$stmtEnd = $con->prepare($deleteEndereco);

$stmtEnd->execute([$id]);

//passo 2
$delete = 'DELETE FROM clientes WHERE id=?'; // :id também é uma opção

$stmt = $con->prepare($delete);

// outra forma de passar os valores
// para a query que usou placeholder(?)
$stmt->bindValue(1, $id); // bindValue faz um por um que coloca o valor e injetar no ? e não precisa colocar os valores para executar

// adicionar valor nomeado
// $stmt->bindValue(':id', $id);

$resultado = $stmt->execute();

var_dump($resultado);

if ($resultado) {
    header('Location: read.php');
    exit;
} else {
    echo 'Erro ao excluir cliente';
}