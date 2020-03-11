<?php 

class Validacao
{
    static public $tamanho; // propriedade estática

    static public function max($valor, $max)
    {
        //$max = static::$tamanho === null ? $max = 0) comparativo de baixa complexidade 

        if (static::$tamanho != null)
        {
            $max = static::$tamanho; 
        }

        if (mb_strlen($valor) > $max)
        {
        return false;
        }
        return true; 
        //echo 'chamou o método max'; 
    }
}

Validacao::$tamanho = 10;

// Em vez de: $valida = new Validacao; como em POO tem a chamada direta 

// chamada de método estático
var_dump(Validacao::max('teste', 3)); 

class Value 
{
    public function nomeSobrenome($nomeCompleto)
    {
        $separado = explode(' ', $nomeCompleto);
    
        $firstName = array_shift($separado); // array_shift() retira o primeiro elemento de array e o retorna

        $lastName = implode(' ', $separado); 

        return [
            'nome' => $firstName, 
            'sobrenome' => $lastName
        ]; 

    }
}

echo '<pre>';
$cliente = Value::nomeSobrenome('Leonardo Pereira de Lima Melo'); 

echo 'Primeiro nome: ' . $cliente['nome']; 
echo '<br>Sobrenome Completo: ' . $cliente['sobrenome'];






?>