<?php

function __autoload($nome_classe)
{
	echo "<hr> Classe Carregara $nome_classe<br>";
	require_once "$nome_classe.php";
}