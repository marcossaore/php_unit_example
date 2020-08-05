<?php

require  "../../vendor/autoload.php";

class GeradorDeNotaFiscalTest extends \PHPUnit\Framework\TestCase
{

    public function testmytest()
    {
        $gerador = new \Loja\FluxoDeCaixa\GeradorDeNotaFiscal();
        //$gerador->gera();$gerador«
    }

    public function testDevePersistirNFGerada()
    {

//        $dao = \Mockery::mock("Loja\FluxoDeCaixa\NFDao");
//        $dao->shouldReceive("persiste")->andReturn(true);

//        $gerador = new GeradorDeNotaFiscal();

//        $pedido = new Pedido("Andre", 1000, 1);

//        $nf = $gerador->gera($pedido);

//        $this->assertTrue($dao->persiste($nf));

//        $this->assertNotNull($nf);
    }
}