<?php

require_once("Investimento.php");
require_once("Conta.php");

class RealizadorDeInvestimentos {

  public function realiza(Conta $conta, Investimento $investimento) {
    $resultado = $investimento->calcula($conta);

    $conta->deposita($resultado * 0.75 );
    error_log('Saldo: '.$conta->getSaldo());
    return $conta->getSaldo();
  }
}
?>
