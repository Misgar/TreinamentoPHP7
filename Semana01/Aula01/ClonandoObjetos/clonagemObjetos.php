<?php

class Contas
{
	public $saldo = 50;
	
	public function __clone() # Metodo chamado toda vez que ocorre uma clonagem
	{
		echo '<hr>';
		echo __METHOD__; # Retorna o endereço do metodo que esta chamando no momendo
		echo '<hr>';
	}
}

$conta1 = new Contas();

var_dump($conta1);

$conta2 =  clone $conta1; # Clona o objeto1 criando objeto dois, que deixa de ser referencia e se torna independente

echo '<hr>';

var_dump($conta2);

echo '<hr>';

$conta2->saldo = 100; # Alterando propriedade saldo do objeto conta2, da classe contas.

