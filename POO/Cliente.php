<?php 


// declaração da classe 
class Cliente 
{ 
    //Atributos -> visibilidade (public)
    public $nome; 
    public $sobrenome; 
    public $CPF; 
    public $nomeCompleto;

// comstrutor é um recurso para inicializar seus atributos de forma direta - 
    function __construct($nome, $sobrenome, $CPF) //dois underlines -> INVOCAÇÕES
    {
        $this->nome = $nome; 
        $this->sobrenome = $sobrenome; 
        $this->CPF = $CPF; 
        $this->nomeCompleto = "$nome $sobrenome";
    }   

    public function salvar()
    {
      
      $sql =  "INSERT INTO clientes (nome, sobrenome, cpf)
              VALUES ('$this->nome', '$this->sobrenome', '$this->CPF')"; 
              //VALUES (?, ?, ?); 

              echo $sql;       
        // $con = new PDO(); 
        // $stmt = $con->prepare();
        //  $this->nome, $this->sobrenome
    }
}











?>