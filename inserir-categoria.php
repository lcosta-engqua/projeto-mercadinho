<?php
require_once 'conexao.php';
session_start();

function salvarCategoriaSessao(){
  if(!empty($_POST['nome']) && !empty($_POST['fornecedor'])){
    $_SESSION['nomeCategoria'] = $_POST['nome'];
    $_SESSION['fornecedor'] = $_POST['fornecedor'];
  }
}

function inserirCategoria(){
  global $conn;
  $nome = $_SESSION['nomeCategoria'];
  $fornecedor = $_SESSION['fornecedor'];

  $stmt = $conn->prepare("INSERT INTO categorias(nome, fornecedor_id) VALUES(?,?)");
  $stmt->execute([$nome, $fornecedor]);
}

salvarCategoriaSessao();
inserirCategoria();