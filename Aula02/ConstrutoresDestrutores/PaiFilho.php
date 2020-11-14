<?php


abstract Class Pai
{
   public $nome = "pai";
   
   public function __construct()
   {
       
       echo ' Executado construtor da classe: ' . $this->nome;
   } 

}

final Class Filha extends Pai
{
    
    public function __construct()
    {
        #Usado para chamar o construtor da classe Pai, ao inves de sobrescrever
        parent::__construct();
    }
}


$obj = new Filha();

var_dump($obj);