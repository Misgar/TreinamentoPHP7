<?php

spl_autoload_register(function ($class)
{
    $prefixo = 'Lib\DB';
    $baseDir = __DIR__ . '/src/';
    $len = strlen($prefixo);
    
    /*
     * Comparando se $prefixo e $class tem a mesma quantidade de caracteres
     * Se for a mesma quantidade, o resultado é 0;
     */
    if(strncmp($prefixo, $class, $len) !== 0 )
    {
        return;
    }
    
    $classeRelativa = substr($class, $len);
    
    $fullName = $prefixo . $classeRelativa;
    
    $file = $baseDir . str_replace('\\', DIRECTORY_SEPARATOR, $fullName) . '.php';
    
    if (file_exists($file))
    {
        echo $file;
        require_once $file;
    }
    
});