<?php
$stringConexao = 'pgsql:host=localhost;dbname=aplicacao';
$user = 'curso501';
$senha = 'curso501@secret';

$objPdo = new PDO($stringConexao, $user, $senha);

$objPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


try
{
    $objPdo->beginTransaction(); // Só irá realmente dar commit caso nao haja erro (commit)
    $query = "INSERT INTO usuarios (nome, email, senha) VALUES ('TESTE', 'teste@teste.com', '123445')";
    for ($x = 0; $x <= 2000; $x++)
    {
      
        $objPdo->exec($query);
        if ($x == 1010)
        {
            $query = "INSERT INTO usuarios (nome, email, senha) V";
        }
    }
    
    $query = "INSERT INTO usuarios (nome, email, senha) VALUES ('TESTE', 'teste@teste.com', '123445')";
    $objPdo->exec($query);
    $objPdo->commit(); # Se erro, executa Rollback no bloco Catch
}catch(PDOException $err){
    
    echo 'Erro: ' . $err->getMessage();
    echo '<br>';
    echo 'Realizado rollback!';
    $objPdo->rollBack();
}