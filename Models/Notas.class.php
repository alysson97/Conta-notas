<?php

class Notas{
  private $notas = [
    '100 reais' => 100,
    '50 reais' => 50,
    '20 reais' => 20,
    '10 reais' => 10,
    '5 reais' => 5,
    '2 reais' => 2,
    '1 real' => 1,
    '50 centavos' => 0.5,
    '25 centavos' => 0.25,
    '10 centavos' => 0.1,
    '5 centavos' => 0.05,
    '1 centavo' => 0.001
  ];

  public function getNotas(){
    return $this->notas;
  }


  public function verificaQuantidade($valor, $notas_valores){

    $valorAtual = 0;
    $qtd_notas = 0;
    $valor_e_qtd = [$valorAtual, $qtd_notas];
    $objetoRetornado = [];
    $i=0;
  
  
  
    foreach($notas_valores as $nota=>$valorNota){
      $valor_e_qtd[1] = 0;
  
      if($valor_e_qtd[$valorAtual] + $valorNota <= $valor){
        $valor_e_qtd = $this->testaNotas($valorNota, $valor, $valor_e_qtd[$valorAtual]);
        
      }
  
      if($valor_e_qtd[1] !== 0){
  
        $objetoRetornado[$i] = (object)$valor_e_qtd;
        $objetoRetornado[$i]->{0} = $nota;
        $i++;
      }
  
    }
  
    return $objetoRetornado;  
  }
  function testaNotas($valorNotaAtual, $valorTotal, $valorAtual){
    $qtdNotaAtual = 0;
    $valor_e_qtd = Array();
  
    if($valorNotaAtual + $valorAtual > $valorTotal) return Array(null);
  
    while($valorNotaAtual + $valorAtual <= $valorTotal){
      $qtdNotaAtual++;
      $valorAtual += $valorNotaAtual;
    }
  
    $valor_e_qtd = [$valorAtual, $qtdNotaAtual];
  
    return $valor_e_qtd;
  }
}