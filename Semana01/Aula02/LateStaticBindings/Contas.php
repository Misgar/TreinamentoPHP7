<?php

Class Contas
{
    protected static $saldo = 50;
    
    // Metodos estáticos permitem execucão sem que objeto seja instanciado
    public static function verSaldo()
    {
       # return self::$saldo; // Dessa forma resolve internamente, e não permite na herança
        return self::$saldo;
    }
}

class ContaCorrente extends Contas
{
    protected static $saldo = 500;
}

echo Contas::verSaldo();

echo ContaCorrente::verSaldo();