<?php

class Contas
{
    protected $saldo = 0;
    protected $cpf;
    protected $banco;
    
    public function __construct(float $saldo, string $cpf, string $banco)
    {
        $this->saldo = $saldo;
        $this->cpf = $cpf;
        $this->banco = $banco;
    }
}

class FactoryContas
{
    public static function create()
    {
        return new Contas(1000, '35195367817', 'bancoX');
    }
}

$conta1 = FactoryContas::create();

var_dump($conta1);