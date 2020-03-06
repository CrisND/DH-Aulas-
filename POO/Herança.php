<?php 

class Cliente
{
    public $nome; 
    public $endereco; 
    public $email; 
    public $contato; 
    protected $saldo = 0; 
    private $status = 'ativo'; 

    public function addSaldo($valor)
    {
        $this->saldo += $valor; // +=: saldo + valor
    }

    
}

// melhor prática cada classe em um arquivo diferente 

class PJ extends Cliente 
{
    protected $CNPJ; 

    public function getStatus()
    {
        echo $this->$status; //erro só consegue acessar na classe Cliente 
        // já protected vai
    }
}

$pessoa_juridica = new PJ; 

// echo '<pre>'; 
// var_dump($pessoa_juridica); 

$pessoa_juridica = new PJ; 
$pessoa_juridica->addSaldo(1000000); //

$pessoa_fisica = new PF; 
$pessoa_fisica->addSaldo(100); 


class PF extends Cliente
{
    protected $CPF; 
}

echo '<pre>'; 
var_dump($pessoa_fisica, $pessoa_juridica); 




?>