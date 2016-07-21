<?php

class Conservador implements Investimento{

  function investir($valor){
    $escolhido = mt_rand(1,100) > 50;
    error_log($escolhido);
    return $valor * 0.8;
  }

}

?>
