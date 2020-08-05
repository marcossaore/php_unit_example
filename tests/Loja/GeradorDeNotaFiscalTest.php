<?php

namespace Loja;

class GeradorDeNotaFiscalTest extends \PHPUnit\Framework\TestCase
{

    public function testDevePersistirNFGerada()
    {
        $dao = \Mockery::mock("Loja\NFDao");
        $dao->shouldReceive("persiste")->andReturn(true);

        $gerador = new GeradorDeNotaFiscal();
        $pedido = new Pedido("Andre", 1000, 1);

        $nf = $gerador->gera($pedido);

        $this->assertTrue($dao->persiste($nf));

        $this->assertNotNull($nf);
    }
}