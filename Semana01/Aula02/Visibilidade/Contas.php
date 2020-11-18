<?php

class Contas
{
	protected $saldo = 10;
	protected $teste = 15;
	
	
	public function depositar(float $valor)
	{
		$this->saldo += $valor;
	}
	
	public function verSaldo()
	{
		return $this->saldo;
	}
}

# Final define que a classe ou metodo não poderão gerar heranças e que metodo nao podera ser sobrescrito.
final class ContaCorrente extends Contas
{
	public function verTeste()
	{
		return $this->teste;
	}
	
	public function depositar($valor)
	{
		$this->saldo += $valor;
		return $this->saldo;
	}
	
}

final class ContaPoupanca extends Contas
{
	
}

$cp = new ContaPoupanca;

var_dump($cp);

$conta = new Contas();

# Acessa o atributo protegido atraves de metodo da classe, e não diretamente
$conta->depositar(100);

echo $conta->verSaldo() . '<hr>';


$contaCorrente = new ContaCorrente();

echo $contaCorrente->verSaldo();
echo '<br>';

var_dump($contaCorrente);

echo '<hr>';

echo $contaCorrente->verTeste();
