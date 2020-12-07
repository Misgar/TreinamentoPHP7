<?php

use Doctrine\ORM\EntityManager;
use Entity\Usuarios;

require 'bootstrap.php';

# Retornando campos com base no ID, utilizando find da classe EntityManager de usuarios.php
$usuario = $entityManager->getRepository(Usuarios::class)->find(22);

# Alterando valor de nome
$usuario->setNome('Novo nome');

# Persistindo no banco a nova informação e atualizando no banco.
$entityManager->persist($usuario);
$entityManager->flush();

echo '<pre>';
print_r($usuario);

echo '<hr>';

# Fazendo a busca por e-mail.
$usuario2 = $entityManager->getRepository(Usuarios::class)->findOneByEmail('usuario1@outlook.com');

print_r($usuario2);

echo '<hr>';

try{
# Removendo dado com base na busca anteriormente executada.
$entityManager->remove($usuario2);
$entityManager->flush();
} catch (Exception $e)
{
     $e;
}