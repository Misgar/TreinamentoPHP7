<?php
# Serializacão

/*
 * Utilizando serialização para guardar informações de objeto
 * que poderão ser armazenadas em algum lugar (bd, cookie, etc).
 * Retorna uma especie de Json apos a unserialização.
 */
class Jogador 
{
    protected $nome;
    protected $nivel;
    protected $vida;
    
    public function __construct(string $nome, int $nivel)
    {
        $this->nome = $nome;
        $this->nivel = $nivel;
        $this->vida = 100;
    }
    
    /*
     * Executado toda vez que algum objeto é serializado.
     * Solicita retorno de um array com quais objetos serão especificamente
     * Serializados.
     */
    public function __sleep()
    {
        echo '<hr> Metodo Sleep executado <hr>';
        
        return ['nome', 'vida']; # Retornando quais sao as propriedades que serão serializadas
    }
    
    /*
     * Executado toda vez que algum objeto é unserializado.
     */
    public function __wakeup()
    {
        echo '<hr> Metodo Wakeup executado <hr>';
        $this->vida = 200; // Apos executar, a propriedade vida do jogador tera valor 200.
    }

}

$objJogador = new Jogador('Jogador 1', 1);

echo '<pre>';
$objSerial = serialize($objJogador);
echo $objSerial;

echo '<hr>';

$objReal = unserialize($objSerial);

print_r($objReal);

