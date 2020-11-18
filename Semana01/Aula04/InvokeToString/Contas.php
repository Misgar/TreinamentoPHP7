<?php

class Contas
{
    protected $conta;
    
    public function __construct(int $valor)
    {
        $this->saldo = $valor;
                
    }
    
    /*
     * Metodo executado toda vez que algum metodo
     * relacionado a String seja executado no objeto.
     * Ex: echo
     */
    public function __toString()
    {
        return (string) $this->saldo;
    }
    
    /*
     * Permite o objeto instanciado ser executado como uma funcão
     * Ex:. $obj = new Contas(400)
     *      obj(200)
     *  
     *  Converte Objeto para um callable.
     */
    public function __invoke($valor)
    {
        $this->saldo += $valor;
    }
}

$objConta = new Contas(500);

#$objConta(500);
echo $objConta;

echo '<hr>';

var_dump(is_callable($objConta));
