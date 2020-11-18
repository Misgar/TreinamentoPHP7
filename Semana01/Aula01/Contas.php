<?php

Class Contas
{
	public $saldoConta = 0;

	const TIPO = 'pj';

	public function verSaldo()
	{
		echo "Saldo";
	}
}

$objConta1 = new Contas();

$objConta2 = new Contas();



echo '<hr>';



echo '<hr>';

echo 'Saldo: ' . $objConta1->saldoConta;
echo '<br>';

$objConta1->verSaldo();

echo 'Constante: ' . Contas::TIPO;