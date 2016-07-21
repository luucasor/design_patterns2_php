<?php

require_once("RealizadorDeInvestimentos.php");
require_once("Conta.php");
require_once("Conservador.php");

class InvestimentoTest extends PHPUnit_Framework_TestCase{

  public function testInvestimentoConservador(){

    $conta = new Conta(1000);
    $investidor = new RealizadorDeInvestimentos();

    $this->assertEquals(800, $investidor->calcula(new Conservador(), $conta));
  }
}
?>
