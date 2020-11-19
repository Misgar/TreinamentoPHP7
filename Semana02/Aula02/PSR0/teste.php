<?php
require 'autoload.php';

use Vendor\FourLinux\Filter;
use Lib\Banco\Conexao;

$objFilter = new Filter();
$objConexao = new Conexao();

var_dump($objConexao);
var_dump($objFilter);
