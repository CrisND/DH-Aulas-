<?php

// mysqli_connect(); só conecta no mysql
// mysqli_query
// mysqli_execute

// mysql_connect NÃO FUNCIONA!!! NÂO USAR!! 

// executar normalmente o conteúdo
// Tratativa de erro na conexão
require 'conexao.php';

$select = 'SELECT * FROM clientes';

// executa o SQL no banco de dados que gera um resultado 
$resultado = $con->query($select);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read - Leitura</title>
</head>
<body>
    <h1>CRUD - Leitura</h1>

    <div style="margin-bottom: 15px">
        <a href="create.php">Cadastrar um cliente</a>
    </div>

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>CPF</th>
            <th>Contato</th>
            <th>Criado Em</th>
            <th>Gerência</th>
        </tr>
        <?php
        // fetch para pegar um dado de cada vez 

        // esta capturando linha por linha do resultado do select
        // PDO::FETCH_ASSOC pega os dados de forma associativa
        // colunas serão chaves de array

        //echo PHP_VERSION; - variavel global 

        while ($cliente = $resultado->fetch(PDO::FETCH_ASSOC)) {
            // chamar via array 
            echo '<tr>';
            echo "<td>{$cliente['id']}</td>";
            echo "<td>{$cliente['nome']}</td>";
            echo "<td>{$cliente['sobrenome']}</td>";
            echo "<td>{$cliente['cpf']}</td>";
            echo "<td>{$cliente['contato']}</td>";
            echo "<td>{$cliente['criado_em']}</td>";
            $id = $cliente['id'];
            echo "<td>
                    <a href=\"update.php?id=$id\">Alterar</a>
                    <a href=\"delete.php?id=$id\">Excluir</a>
                 </td>";
                 // parâmetro GET ?id=$id
            echo '</tr>';
        }
        ?>
    </table>

</body>
</html>