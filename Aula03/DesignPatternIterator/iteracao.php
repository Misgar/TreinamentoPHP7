<?php
ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
ini_set('display_errors', 1);
# Implementando metodos da interface Iterator (Design Pattern) Nativo do core php.


# IMPLEMENTACAO DA CLASSE ITERATOR, PARA ITERACAO DE CLASSES USANDO METODOS DA INTERFACE ITERATOR
class PalavrasCollection implements IteratorAggregate
{
    private $itens = [];
    
    public function getItens() :array
    {
        return $this->itens;
    }
    
    public function addItem(string $item)
    {
        $this->itens[] = $item;
    }
    
    public function getIterator():Iterator
    {
        return new OrdemAl($this);
    }
    
    public function getReverseIterator():Iterator
    {
        return new OrdemAl($this, true);
    }
}

# Implementando metodos da Interface Iterator
class OrdemAl implements Iterator
{
    private $colecao;
    private $posicao;
    private $reverso = false;
    
    public function __construct(PalavrasCollection $palavras, bool $reverse = false)
    {
        $this->colecao = $palavras;
        $this->reverso = $reverse;
   
    }
    
    # Retornará a posição atual dentro do array
    public function current()
    {
        # Retorna Array de getItens com a posição atual.
        return $this->colecao->getItens()[$this->posicao];
    }
    
    # Navega para o proximo registro
    public function next()
    {
        # Pegando a posição atual do array e com ternario, verificando se é reverso e aplicando a operação.
        $this->posicao = $this->posicao + ($this->reverso ? -1 : 1);
    }
    
    public function key ()
    {
        return $this->posicao;
    }
    
    public function valid() 
    {
        return isset($this->colecao->getItens()[$this->posicao]);
    }
    
    public function rewind()
    {
        $this->posicao = ($this->reverso) ? count($this->colecao->getItens()) -1 : 0;
    }
}

$colecaoPalavras = new PalavrasCollection();

$colecaoPalavras->addItem("Primeiro");
$colecaoPalavras->addItem("Segundo");
$colecaoPalavras->addItem("Terceiro");


echo "<hr>Ordem normal <hr>";

foreach ($colecaoPalavras->getIterator() as $dado)
{
    echo "$dado<br>";
}

echo "<hr>Ordem Reversa <hr>";

foreach($colecaoPalavras->getReverseIterator() as $dado)
{
    echo "$dado<br>";
}
