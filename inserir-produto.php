<?php
require_once 'conexao.php';
ini_set('display_errors', 1); 
error_reporting(E_ALL);

session_start();

function salvarProdutoSessao(){
  if(!empty($_POST['nome']) && !empty($_POST['descricao']) && !empty($_POST['marca']) && !empty($_POST['categoria'])){
    $_SESSION['nomeProduto'] = $_POST['nome'];
    $_SESSION['descricaoProduto'] = $_POST['descricao'];
    $_SESSION['marcaProduto'] = $_POST['marca'];
    $_SESSION['categoriaProduto'] = $_POST['categoria'];
    $_SESSION['precoProduto'] = $_POST['preco'];
  }
}

function inserirProduto(){
  global $conn;
  $nome = $_SESSION['nomeProduto'];
  $descricao = $_SESSION['descricaoProduto'];
  $marca = $_SESSION['marcaProduto'];
  $categoria = $_SESSION['categoriaProduto'];
  $preco_custo = $_SESSION['precoProduto'];

  print_r($_SESSION);
  print_r([$nome, $descricao, $marca, $categoria, $preco_custo]);

  $stmt = $conn->prepare("INSERT INTO produtos(nome, descricao, marcar_id, categoria_id, preco_custo) VALUES(?, ?, ?, ?, ?)");
  $stmt->execute([$nome, $descricao, $marca, $categoria, $preco_custo]);
}

salvarProdutoSessao();
inserirProduto();
?>