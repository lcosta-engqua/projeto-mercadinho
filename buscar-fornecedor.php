<?php
require_once 'conexao.php';

function listarFornecedores(){
  global $conn;

  $stmt = $conn->prepare("SELECT * FROM fornecedores");
  $stmt->execute();
  $result = $stmt->fetchAll();
  return $result ?? [];

  // print_r($result);
}

listarFornecedores();
?>