<?php 

// reutiliza o código (forma inicial) e altera (modifica a forma original)

class Conta
{
    protected $saldo; 

    public function __construct()
    {
        $this->saldo = 200; 
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function retiraSaldo(float $valor) : void //dentro da parenthesis é a regra interna e o de fora é do return // void-> não pode retornar algo
    {
        $this->saldo -= $valor; 
    }

    public function retiraMensalidade()
    {
        $this->retiraSaldo(20); //reaproveitamento de código 
    }

    public function isNegative($valor)
    {
        return ($this->saldo - $valor) < 0;
    }

}

class ContaPremium extends Conta
{
    public function retiraSaldo(float $valor) : void 
    {
        if ($this->isNegative($valor)) //validando se quando retira o valor é menor que 0
        {
            exit('Ops saldo não suficiente');
        }   
        //$this->saldo -=$valor; sem polimorfismo
        parent::retiraSaldo($valor); //$this->retiraSaldo(); recursividade - loop infinito NÃO FUNCIONA! 
    }

    public function retiraMensalidade()
    {
        $this->retiraSaldo(50);
    }


}

//$conta = new Conta();
$conta = new ContaPremium();

//$conta->retiraSaldo(50.55);
$conta->retiraMensalidade();

echo $conta->getSaldo();


?>