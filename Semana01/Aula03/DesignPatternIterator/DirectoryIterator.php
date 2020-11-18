<?php

# Permite trabalhar com metodos para diretorios
$objetDirectory = new DirectoryIterator('/var/www/html');

foreach($objetDirectory as $item)
{
    echo $item->getFileName() . '<br>';
}

