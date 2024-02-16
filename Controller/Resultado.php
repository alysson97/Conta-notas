<?php
include "../Models/Notas.class.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $valor = $_POST['valor'];

  $notasClass = new Notas();
  $notas_valores = $notasClass->getNotas();
  

  $responseData = $notasClass->verificaQuantidade($valor, $notas_valores);
  $objetoRetornado = (object)$responseData;

  header('Content-Type: application/json');
  echo json_encode($objetoRetornado);

}
