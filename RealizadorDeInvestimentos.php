<?php

require_once("Investimento.php");
require_once("Conta.php");

class RealizadorDeInvestimentos{

  public function calcula(Investimento $investimento, Conta $conta){
    return $investimento->investir($conta->getSaldo());
  }
}
?>
