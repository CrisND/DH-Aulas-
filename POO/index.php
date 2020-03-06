<?php

require 'cliente.php';

echo '<pre>'; 

// Instancia 

// Para formulário: 
//$cliente1 = new Cliente($_POST['nome'], $_POST['sobrenome'], $_POST['CPF'],);


 $cliente1 = new Cliente('Leonardo', 'Cardoso', '543.654.432-65' );
 //var_dump($cliente1); 

 $cliente1->salvar(); 

 $cliente2 = new Cliente('Carlos', 'Faria', '765.324.875.64'); 
// var_dump($cliente2); 
echo '<br>';

$cliente2->salvar(); 

// Atributos são variáveis da classe
// $cliente1->nome = 'Leonardo'; 
// $cliente1->sobrenome = 'Cardoso';

// $cliente2->nome = 'Carlos'; 
// $cliente2->sobrenome = 'Faria'; 
//acesso ao atributo nome 
// echo $cliente1->nome . ' ' . $cliente1->sobrenome; 

//echo "$cliente1->nome $cliente1->sobrenome"; 
echo $cliente2->nomeCompleto; 

// echo '<pre>'; 
//var_dump($cliente1,$cliente2); 



?>