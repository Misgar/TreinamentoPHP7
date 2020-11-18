<?php

/*
 * Criando namespaces para resolução de conflito de nomes de classes.
 * Muito utilizado para evitar que bibliotecas diferentes tenham este tipo de conflito.
 * Possibilita a criação de aliases.
 * * Namespace termina onde outro começa. Deve ser o primeiro codigo do script; *
 */


namespace Banco\Bradesco;

class Banco
{
    public $nome = 'Nubank';
}

class Agencia
{
    public $nome = 'URB-JOAOCOSTA';
}

namespace Banco\Itau;
use Banco\Bradesco\Banco as BancoBradesco; # Importanto Bradesco e Criando Alias para evitar conflito de nome.

class Banco
{
    public $nome = 'Itau';
}

class Agencia
{
    public $nome = 'IT-VilaMariana';
}

$banco1 = new Banco();
$bancobradesco = new BancoBradesco(); # Passando alias (ou caminho completo).
$agencia = new Agencia();

var_dump($banco1);
echo '<br>';
var_dump($agencia);

