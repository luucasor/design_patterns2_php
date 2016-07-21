<?php

require_once("RealizadorDeInvestimentos.php");
require_once("Conta.php");
require_once("Conservador.php");
require_once("Moderado.php");
require_once("Arrojado.php");

class InvestimentoTest extends PHPUnit_Framework_TestCase{

  public function testInvestimentoConservador(){

    $conta = new Conta();
    $conta->deposita(1000);
    $investidor = new RealizadorDeInvestimentos();

    $this->assertEquals(1006, $investidor->realiza($conta, new Conservador()));
  }

  public function testInvestimentoModerado(){

    $conta = new Conta();
    $conta->deposita(1000);
    $investidor = new RealizadorDeInvestimentos();

    $this->assertTrue(1005.25 || 1018.75, $investidor->realiza($conta, new Moderado()));

  }

  public function testInvestimentoArrojado(){

    $conta = new Conta();
    $conta->deposita(1000);
    $investidor = new RealizadorDeInvestimentos();
    $saldo = $investidor->realiza($conta, new Arrojado());

    $this->assertContains( $saldo, array(1375, 1004.5, 1225));

  }
}
?>
