<?php 

$driver = 'mysql:dbname=aulapdo;port=3307;host=localhost'; // oracle, odbc, mysql - banco de dados | pode colocar tbm servidor externo
// dbname é obrigtório, o restante se tiver padrão 3306 não precisa informar 

$user = 'root'; 
$password = '';

$conexao = new PDO($driver, $user, $password); 

// arquivo separado que chama para conectar com o baco de dados 

//var_dump($conexao);

/* SQL INJECTION !!! 
$nome = "' or drop database <seu db> "; */

$sql = "INSERT clientes (nome, email, telefone) 
        VALUES ('Regiane', 'regiane@teste.com', '11 5673-4389')";

$affected = $conexao->exec($sql); // executa o SQL para o programador comando sem resulta UPDATE DELETE SELECT 

var_dump($affected); 

if ($affected ===false){
        echo "Erro ao cadastrar" 
}


?>