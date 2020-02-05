<?php

// $_GET
// $_POST

echo '<pre>';   
// var_dump($_FILES);

$curriculo = $_FILES['curriculo']; 

// echo $curriculo['type']; // image/jpeg - Mime type 
//https://developer.mozilla.org/pt-BR/docs/Web/HTTP/Basico_sobre_HTTP/MIME_types 

if ($curriculo['type'] != 'application/pdf'){
    exit ('Formato incorreto - somente PDF');
    //header('Location: upload.php');
}

//Render WhiteSpace - View 
// var_dump($curriculo); 

// primeiro atributo arquivo temporário 
// segundo atributo local que queremos salvar
$resultado = move_uploaded_file($curriculo['tmp_name'], 'imagens/CV_' . $_POST['nome_completo']. rand() . '.pdf');

if ($resultado === true) {
    echo 'Arquivo carregado com sucesso'; 
} else {
    echo 'Nooope! Tenta novamente';
}





?>