<?php

namespace Lib\View;

class ViewModel
{
    public static function render($caminhoView, $dados = null)
    {
     
        require __DIR__ . '/../../../view/layout/layout.phtml';
    }
}