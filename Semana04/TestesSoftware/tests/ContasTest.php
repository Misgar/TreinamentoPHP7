<?php

use PHPUnit\Framework\TestCase;

class ContasTest extends TestCase
{
    public function testSacarComSaldo()
    {
        $objConta = new Contas();
        $objConta->depositar(500);
        $mockBanco = $this->createMock(Banco::class);
        $mockBanco->method('buscar')->willReturn(
            [
                'id' => 10,
                'nome' => 'Cliente Teste',
                'cpf' => '351.953.678.17'
            ]
        );
        $objConta->setBanco($mockBanco);

        $return = $objConta->sacar(200);
        $this->assertTrue($return);
        $this->assertEquals(300, $objConta->saldoTotal());
    }

    public function testSacarSaldoInsuficiente()
    {
        
        $objConta = new Contas();
        $objConta->depositar(500);
        $return = $objConta->sacar(2000);

        $this->assertFalse($return);
    }
}