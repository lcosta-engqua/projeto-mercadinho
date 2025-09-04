<?php
require_once 'conexao.php';
session_start();

function salvarMarcaSessao(){
  if(!empty($_POST['nome']) && !empty($_POST['fornecedor'])){
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['fornecedor'] = $_POST['fornecedor'];
  }
}

function inserirMarca(){
  global $conn;
  $nome = $_SESSION['nome'];
  $fornecedor = $_SESSION['fornecedor'];

  $stmt = $conn->prepare("INSERT INTO marcas(nome, fornecedor_id) VALUES (?,?)");
  $stmt->execute([$nome, $fornecedor]);

}

salvarMarcaSessao();
inserirMarca();
?>