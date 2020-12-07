<?php

class Contas {
    protected $saldo = 0;
    protected $banco;
    protected $cpf = '351.953.678.17';

    public function setBanco(Banco $banco)
    {
        $this->banco = $banco;
    }

    public function getCliente($cpf)
    {
        return $this->banco->buscar($cpf);
    }

    public function depositar(float $valor)
    {
        $this->saldo += $valor;
    }

    public function sacar(float $valor)
    {
        if ($valor > $this->saldo)
        {
            throw new Exception("Saldo insuficiente!");
            return false;
        }

        $cliente = $this->banco->buscar($this->cpf);
        
        $this->saldo -= $valor;

        return true;
    }

    public function saldoTotal()
    {
        return $this->saldo;
    }

}