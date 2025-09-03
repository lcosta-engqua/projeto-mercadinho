<?php
include_once 'conexao.php';

function listarMarcas(){
  global $conn;
  try{
    $stmt = $conn->prepare("SELECT * FROM marcas");
    $stmt->execute();
    $result = $stmt->fetchAll();

    // Retorna o valor de $result, mas se $result for null ou não existir, retorne um array vazio ([])
    return $result ?? [];
  }catch(PDOException $e){
    echo "Error " . $e->getMessage();
  }
}

listarMarcas();
?>