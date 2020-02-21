<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exibe clientes</title>
</head>
<body>

<h1>Lista de clientes</h1>

<?php
$con = new PDO('mysql:dbname=aulapdo;port=3307', 'root', ''); 

$SELECT = 'SELECT * FROM clientes ORDER BY nome DESC'; 

// exec não funciona com SELECT
$resultado = $con->query($SELECT); // statement - apontamento para o resultado da tabela pega por paginação (LIMIT)
// resultado ainda no mysql 
// query para captar as infos que não tenho 

// fetch para o php não estorar  

echo '<pre>';
//var_dump($resultado->fetch()); 

/*while ($cliente = $resultado->fetch()){
    echo $cliente[1] . ' - ' . $cliente['email'] . '<br>'; // pode trazer pela coluna também 
}*/

//FETCH_ASSOC
/*while ($cliente = $resultado->fetch(PDO::FETCH_ASSOC)){
    echo $cliente['nome'] . ' - ' . $cliente['email'] . '<br>';
}*/

//FETCH_OBJ
/*while ($cliente = $resultado->fetch(PDO::FETCH_OBJ)){
    echo $cliente->nome . ' - ' . $cliente->email . '<br>';
}*/

/*while ($cliente = $resultado->fetch(PDO::FETCH_OBJ)){
    echo "$cliente->nome - $cliente->email . '<br>'";
}*/

//PARTE 2
$clientes = $resultado->fetchALL(PDO::FETCH_ASSOC); // armazenar 

//var_dump($clientes);

/*foreach ($clientes as $cliente) {    // exibir 
    echo $cliente['nome'] . '<br>';
}*/

?>

    <table border="1">
         <tr>
            <th>id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>

            <?php
                foreach ($clientes as $cliente){
                    echo '<tr>'; 
                    echo "<td>{$cliente['id']}</t>"; 
                    echo "<td>{$cliente['nome']}</t>"; 
                    echo "<td>{$cliente['email']}</t>"; 
                    echo "<td>{$cliente['telefone']}</t>"; 
                    //echo '<td>' . $cliente['id'] . '</t>'; 
                    echo '</td>'; 
                }
            ?>

    </table>



</body>
</html>
