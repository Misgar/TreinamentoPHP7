<?php

use Lib\Controller\FrontController;

require '../autoload.php';

$objFrontController = new FrontController();

 if(is_object($objFrontController))
 {
     echo 'verdadeiro';
 }
 // Se autoload esta funcionando

$objFrontController->run();

?>