<?php

#stringConexao = 'mysql:host=localhost;dbname=aplicacao';
$stringConexao = 'pgsql:host=localhost;dbname=aplicacao';
$user = 'curso501';
$senha = 'curso501@secret';

$objPdo = new PDO($stringConexao, $user, $senha);

$objPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); # Retorna o erro do banco

//var_dump($objPdo);

try
{
    $consulta = 'SELECT * FROM usuarios';
    $return = $objPdo->query($consulta);
    $registros = $return->fetchAll(PDO::FETCH_ASSOC); #Retorna todos os dados em forma de array associativo
    echo '<pre>';
    print_r($registros);
    echo '<hr>';
    
    $consulta = 'SELECT * FROM usuarios WHERE id = 1';
    $return = $objPdo->query($consulta);
    $registro = $return->fetch(PDO::FETCH_OBJ); // Retorna como objeto ou como array apenas registro
    print_r($registro);
    
    echo '<hr>';
    
    $query = "INSERT INTO usuarios (nome, email, senha) VALUES ('TESTE', 'teste@teste.com', '123445')";
    var_dump($objPdo->exec($query)); // Executa, sem retorno.
    
    
  
} catch(PDOException $err){
    echo $err->getMessage() . '|' . $err->getCode();
}