<?php

class Contas
{
    protected $saldo = 50;
    
    public function sacar(float $valor)
    {
        if($valor > $this->saldo)
        {
            throw  new Exception("Saldo Insuficiente: {$this->saldo} disponível.");
            
            return;
        }
        
        $this->saldo -= $valor;
    }
}

$conta = new Contas();

$conta->sacar(200);

