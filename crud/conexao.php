<?php
require 'config.php';

// require para encontrar o arquivo - melhor que o include evitando erro 

try {
    $drive = "$database:dbname=$dbname;port=$port;host=$host";
    $con = new PDO($drive, $username, $senha);
// variável conexão
// criar classe é uma opção tbm 

} catch (PDOException $exception) {
    echo $exception->getMessage();
    exit('Ops algum erro ocorreu');
}

// em caso de erro no PDO cai no "catch" em que não precisa de condicional