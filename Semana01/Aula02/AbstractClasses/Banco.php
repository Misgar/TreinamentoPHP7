<?php

// Não pode ser diretamente instanciado, apenas herdado
abstract Class Contas
{
    protected $saldo;
    
    public function depositar(float $valor)
    {
        $this->saldo += $valor;
    }
    
    public function verSaldo(): float
    {
        return $this->saldo;
    }
    
    # Metodo abstrato obriga que seja implementado nas classes descendentes
    public abstract function gerarLog(); 
        
}

final Class ContaCorrente extends Contas
{
    public function gerarLog()
    {
        echo 'Log Gerado';
    }
}

$objConta = new ContaCorrente();

$objConta->depositar(100);

var_dump($objConta);

echo '<hr>';

echo 'O saldo em conta é: ' . $objConta->verSaldo();


