<?php
/*
 * Padrão para definir diferentes soluções.
 * Facilita no momento de adicionar diferentes situações a alguma complexidade Ex:. Frete
 * 
 * No exemplo, criei a interface FreteInterface para criação de classes de Frete
 * Dessa forma, o pedido apenas recebe a forma de frete ja calculado, sem necessidade
 * de adição de um calculo dentro da propria classe, aumentando sua complexidade.
 */
interface FreteInterface
{
    public function getValorFrete();
    
}
# Dois fretes diferentes
class FreteMotoboy implements FreteInterface
{
    protected $valorFrete = 20;
    
    public function getValorFrete()
    {
        return $this->valorFrete;
    }
}

class FreteSedex implements FreteInterface
{
    protected $valorFrete = 40;
    
    public function getValorFrete()
    {
        return $this->valorFrete;
    }
}

# No pedido, apenas recebe a classe com a implementação de FreteInterface. Codigo mais legivel.
class Pedido
{
    protected $total;
    protected $valorPedido;
    
    public function calcularTotal(float $valor, FreteInterface $frete)
    {
        $this->valorPedido = $valor;
        
        $this->total = $this->valorPedido + $frete->getValorFrete();
        
        return $this->total;
    }
}

$pedido = new Pedido();
$total = $pedido->calcularTotal(2300, new FreteMotoboy());
var_dump($total);
