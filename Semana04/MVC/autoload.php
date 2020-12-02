<?php

function carregarClasse($classe)
{
    var_dump($classe);
    echo '<br>';
   
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $classe); # Substituindo a '\' por '/'
    
    $caminhoArquivo = __DIR__ . "/src/$file.php";
    
    $file .= '.php'; # Adicionando .php ao final do arquivo.
    
    if (file_exists($caminhoArquivo))
    {
        require_once $caminhoArquivo;
    }
}

spl_autoload_register('carregarClasse'); # Recebe full qualified name (Nome completo da classe) como caminho.

