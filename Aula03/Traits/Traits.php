<?php
ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
ini_set('display_errors', 1);

trait TraitTesteA
{
    public function negrito($texto)
    {
        return "<strong> $texto </strong>";
    }
}

trait TraitTesteB
{
    public function italico($texto)
    {
        return "<i> $texto </i>";
    }
    
    public function negrito($texto)
    {
        return "<strong> $texto </strong>";
    }
}

# Juntando Multiplos Traits
trait TraitTesteTodos
{
    # Resolvendo conflito de metodos iguais
    use TraitTesteB, TraitTesteA
    {
        TraitTesteA::negrito insteadof TraitTesteB;
        TraitTesteB::negrito as negritoTesteB;
        # Alias para a funcao negrito de traittesteb
    }
    
    
}

class Formatar
{
    use TraitTesteTodos;
    
    public function linha()
    {
        echo '<hr>';
    }
}

$formato = new Formatar();

echo $formato->negrito("Um texto");
echo '<br>';
echo $formato->italico("Outro texto");
echo $formato->linha();
