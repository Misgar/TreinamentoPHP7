<?php
ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
ini_set('display_errors', 1);

// Interface Banco
interface BancoInterface
{

    public function getNome():string;
}

// Classe BancoX que implementa os metodos de da interface BancoInterface
class BancoX implements BancoInterface
{
    protected $nome = 'BancoX';
    
    public function getNome():string
    {
        return (string) $this->nome; # Força que o valor seja String
    }
}
/*
 * Classe Contas que recebe os parametros para criação.
 * Construtor solicita objeto do tipo Banco interface.
 * No Exemplo, utilizo um Objeto BancoX, que esta implementando BancoInterface.
 */
Class Contas
{
    protected $banco;
    protected $saldo = 0;
    
    public function __construct(BancoInterface $banco, $saldo)
    {
        $this->banco = $banco;
        $this->saldo = $saldo;
    }
    
    public function getBanco()
    {
        return $this->banco;        
    }
}
$conta = new Contas(new BancoX(), 5000);

/*
 * Criando objeto de contas, passando como parametro uma classe anonima 
 * que implementa a interface BancoInterface.
 * Utilizado já que não possuimos a classe BancoY, como o caso do BancoX
 * Portanto, é possivel fazer em tempo de de execução.
 */
$contaAnon = new Contas(new class() implements BancoInterface
    {  
        protected $nome = 'BancoY';
        
        public function getNome():string
        {
            return (string) $this->nome;
        }
        
        
    }, 5000);

var_dump($contaAnon);

echo '<hr>';

echo 'Nome do Banco: ' . $contaAnon->getBanco()->getNome() . '<hr>';

echo $conta->getBanco()->getNome();



