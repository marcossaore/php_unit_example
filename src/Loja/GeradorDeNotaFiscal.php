<?php


namespace Loja\FluxoDeCaixa;


class GeradorDeNotaFiscal
{
    public function gera(Pedido $pedido) : ?NotaFiscal
    {
        $nf =  new NotaFiscal(
            $pedido->getCliente(),
            $pedido->getValorTotal() * 0.94,
            new \DateTime()
        );

        $nfDao = new NFDao();

        if($nfDao->persiste($nf)){
            return $nf;
        }

        return null;
    }
}