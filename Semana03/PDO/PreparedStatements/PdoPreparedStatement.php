<?php

$dsn = 'pgsql:host=localhost; dbname=aplicacao';
$user = 'curso501';
$pass = 'curso501@secret';

$conexao = new PDO($dsn, $user, $pass);
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $query = "INSERT INTO usuarios(nome, email, senha) VALUES (?, ?, ?)";
    
  /*  $queryPrepared = $conexao->prepare($query);
    $valores = [
        'Sysadmin', 
        'admin@aplicacao.com.br',
        '123456'   
    ];
    
    $return = $queryPrepared->execute($valores);
    var_dump($return);
    */
    
    $query = "SELECT * FROM usuarios WHERE email = ?";
    $statement = $conexao->prepare($query); # Prepared Statement
    
    # Executando prepared Statement. O parametro deve ser passado em formato de array
    $statement->execute([
        'admin@aplicacao.com.br'
    ]);
    
    $usuario = $statement->fetch(PDO::FETCH_ASSOC); # Recebendo os dados do banco em formato de array.
   
    echo '<pre>';
    print_r($usuario);
    var_dump($usuario);
    
    
} catch (PDOException $e) {
    
    echo 'Erro: ' ; $e->getMessage() . '<br>Codigo: ' . $e->getCode();
}


