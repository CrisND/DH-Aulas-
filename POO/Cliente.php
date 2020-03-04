<?php 

// declaração da classe 
class Cliente 
{ 
    public $nome; 
    public $sobrenome; 
    public $CPF; 
}
// visibilidade (public)

// Instancia 
$cliente1 = new Cliente();
$cliente2 = new Cliente(); 

// Atributos são variáveis da classe
$cliente1->nome = 'Leonardo'; 
$cliente1->sobrenome = 'Cardoso';

$cliente2->nome = 'Carlos'; 
$cliente2->sobrenome = 'Faria'; 
//acesso ao atributo nome 
// echo $cliente1->nome . ' ' . $cliente1->sobrenome; 

echo "$cliente1->nome $cliente1->sobrenome"; 

// echo '<pre>'; 
//var_dump($cliente1,$cliente2); 

?>