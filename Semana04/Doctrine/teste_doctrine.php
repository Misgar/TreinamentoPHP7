
<?php

use Entity\Usuarios;

require_once 'bootstrap.php';

//$entityManager

# Usuario 1
try{

$usuario1 = new Usuarios();
$usuario1->setEmail('usuario1@outlook.com');
$usuario1->setNome('Goiaba de lima');
$usuario1->setPassword('123456');
$entityManager->persist($usuario1);
$entityManager->flush();

# Usuario 2
$usuario2 = new Usuarios();
$usuario2->setEmail('usuario2@outlook.com');
$usuario2->setNome('Goiaba de lima2');
$usuario2->setPassword('123456');
$entityManager->persist($usuario2);
$entityManager->flush();
# Usuario 3
$usuario3 = new Usuarios();
$usuario3->setEmail('usuario3@outlook.com');
$usuario3->setNome('Goiaba de lima3');
$usuario3->setPassword('123456');
$entityManager->persist($usuario3);
$entityManager->persist($usuario3);
$entityManager->flush();
echo 'Dados Salvos com sucesso!';

} catch(Exception $e)
{
    throw new Exception($e);
    exit();
}






