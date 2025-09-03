<?php
require_once 'conexao.php';

function salvarProdutoSessao(){
  session_start();
  if(!empty($_POST['nome']) && !empty($_POST['descricao'])){
    $_SESSION['nomeProduto'] = $_POST['nome'];
    $_SESSION['descricaoProduto'] = $_POST['descricao'];
    echo "<br>";
    print_r($_SESSION['nomeProduto']);
    print_r($_SESSION['descricaoProduto']);
  }
}


salvarProdutoSessao();

require_once 'buscar-marcas.php';
?>