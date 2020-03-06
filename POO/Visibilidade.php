<?php

// Visibilidade: 
    // public 
    // protected
    // private

class Produto 
{
    public $nome; //pode ser acessada fora 
    
    protected $preco; // não pode acessado fora da classe diretamente 

    public function setPreco(float $preco) // método de apoio para filtrar set and get 
    {   
        if ($preco < 0) {
            exit('preço não pode ser menor que 0');
        }
        $this->preco = $preco; 
    }

    protected function formataPreco($preco) // bloco de lógica 
    {
        return 'R$ ' . number_format($preco, 2, '.', ','); 
    }

    public function salvar()
    {
        $saldo= $this->formataPreco($this->preco); 
    }

    private $descricao; // mesma coisa que protected só muda com herança (CSS) 
}

$prod = new Produto; 

$prod->nome = 'Monitor Gamer de 49 polegadas ultrawide'; 

// filtro de validação 
$prod->setPreco(-10); 

?> 
