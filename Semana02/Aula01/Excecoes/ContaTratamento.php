<?php

class Contas
{
    protected $saldo = 50;
    
    public function sacar(float $valor)
    {
        if ($valor > $this->saldo)
        {
            throw new SaldoInsuficienteException('Saldo insuficiente', 10);
            return;
        }
        
        $this->saldo -= $valor;
    }
}

/*
 * Trabalhando com a propria classe de exceções ao inves da classe Exception Padrão
 */
class SaldoInsuficienteException extends Exception
{}

try{
    $contas = new Contas();
    $contas->sacar(200);
    
}catch (SaldoInsuficienteException $err){
    echo $err->getMessage();
    echo '<br>';
    echo 'Codigo do erro: ' . $err->getCode();
}finally {
    echo '<br>Codigo Executado apos o try';
}

