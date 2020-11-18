<?php

class Pessoa
{
	public $id;
	public $nome;
	public $email;
	
	public function __construct(int $id, string $nome, string $email)
	{
		$this->id = $id;
		$this->nome = $nome;
		$this->email = $email;
		echo '<hr>Objeto Instanciado <hr>';
		
	}
	
	public function __destruct() # Sempre que o obheto for destruido (unset) ou a execução acabar.
	{
		echo '<hr> O objeto foi destruido <hr>';
		echo 'ID: ' . $this->id;
		echo '<br>Nome: ' . $this->nome;
		echo '<br>Email: ' . $this->email;
		echo '<br>';
	}
	
}

$pessoa1 = new Pessoa(10, 'Aline batatinha', 'batatinha_alininha@aline.com.aline');

unset($pessoa1); # Vai destruir o objeto manualmente, antes do var_dump e do destruct.

var_dump($pessoa1); # Aparecerá como nulo caso o unset esteja antes de sua execução.