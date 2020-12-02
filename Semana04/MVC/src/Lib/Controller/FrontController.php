<?php

namespace Lib\Controller;

use Lib\View\ViewModel;

class FrontController
{
    public function run()
    {
        //rota=controller/action
        $rota = $_GET['rota'] ?? 'index/index'; // controlador e action
        $parserRota = explode('/', $rota);
        
       
        
        
        $controller = $parserRota[0]; // Controlador. Explode retornou array
        
        $action     = $parserRota[1]; // A ação
        
        $caminhoView = "$controller/$action";
        
        # 'Controller' diz respeito ao namespace. Fixado pois todos os controladores ficarão no mesmo diretorio. 
        $controller = 'Controller\\' . ucfirst($controller); // Convertendo controlador para letra maiuscula, por ser classe     
        $objController = new $controller;
        
        
        
        if (! method_exists($objController, $action))
        {
            throw new \Exception('Rota invalida');
            return;
            exit();
        }
        
        $dados = $objController->$action();
        
        ViewModel::render($caminhoView, $dados);
    }
}