
<?php

use Entity\Perfis;
use Entity\Usuarios;

require_once 'bootstrap.php';

//$entityManager

# Usuario 1
try{

$usuario1 = new Usuarios();
$perfil = new Perfis();

$perfil->setNome('Financeiro');

$usuario1->setEmail('patricia.lima@outlook.com');
$usuario1->setNome('Patricia de lima');

$usuario1->setPassword('123456');
$usuario1->setPerfil($perfil);

$entityManager->persist($usuario1);
$entityManager->persist($perfil);
$entityManager->flush();

echo 'Dados Salvos com sucesso!';

} catch(Exception $e)
{
    throw new Exception($e);
    exit();
}






