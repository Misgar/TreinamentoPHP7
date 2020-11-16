<?php

class Contas
{
    private $saldo;
    
    
    /*
     * Metodo executado sempre que for atribuido no objeto
     * valor a alguma propriedade que não exista
     */
    public function __set($propriedade, $valor)
    {
        if(! property_exists($this,$propriedade))
        {
            return;
        }
        $this->$propriedade= $valor;
    }
    
    public function __call($metodo, $argumentos)
    {
        echo '<hr> Esse metodo nao existe. <hr>';
    }
    
    public static function __callStatic($metodo, $argumentos)
    {
        echo "<hr> $metodo Esse metodo statico nao existe. <hr>";
        var_dump($argumentos);
    }
    
}


$objContas = new Contas();

$objContas->saldo = 10;

$objContas->banco = 'Teste';

echo $objContas->verSaldo('a');
echo $objContas::verSaldo();

echo '<pre>';

print_r($objContas);