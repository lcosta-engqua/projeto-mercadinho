<?php
require_once 'conexao.php';

function listarCategorias(){
  global $conn;
  try{
    $stmt = $conn->prepare("SELECT * FROM categorias");
    $stmt->execute();
    $result = $stmt->fetchAll();

    // Retorna o valor de $result, mas se $result for null ou não existir, retorne um array vazio ([])
    return $result ?? [];
  }catch(PDOException $e){
    echo "Error " . $e->getMessage();
  }
}

listarCategorias();