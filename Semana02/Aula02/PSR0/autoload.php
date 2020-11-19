<?php

function carregarClasse($classe)
{
    var_dump($classe);
    echo '<br>';
   
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $classe); # Substituindo a '\' por '/'
    
    $file .= '.php'; # Adicionando .php ao final do arquivo.
    
    if (file_exists($file))
    {
        require_once $file;
    }
}

spl_autoload_register('carregarClasse'); # Recebe full qualified name (Nome completo da classe) como caminho.

