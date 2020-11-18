<?php

interface InterfaceFrete
{
    public function calcularFrete(float $valor);
    public function getValorFrete();
}

Class Motoboy implements InterfaceFrete
{
    const valorFrete = 20;
    protected $valorComFrete = 0;
    
    public function calcularFrete(float $valor)
    {
        $this->valorComFrete = $valor + self::valorFrete;
    }
    
    public function getValorFrete()
    {
        return $this->valorComFrete;
    }
}

Class Correio implements InterfaceFrete
{
    const valorFrete = 50;
    protected $valorComFrete = 0;
    
    public function calcularFrete(float $valor)
    {
        $this->valorComFrete = $valor + self::valorFrete;
    }
    
    public function getValorFrete()
    {
        return $this->valorComFrete;
    }
}

Class Aplicacao 
{
    public function calcularTotal($valorCompra, InterfaceFrete $frete)
    {
        $frete->calcularFrete($valorCompra);
        return $frete->getValorFrete();
    }
}

$app = new Aplicacao();
$freteMoto = new Motoboy();
$freteCorreio = new Correio();
$valorCompra = 100;

 

echo $app->calcularTotal($valorCompra, $freteMoto);

