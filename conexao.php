<?php
$nomeservidor = "localhost";
$usuariodb = "root";
$senhadb = "";

// conexao MySQL PDO
try{
  $conn = new PDO("mysql:host=$nomeservidor;dbname=mercadinho", $usuariodb, $senhadb);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Sucesso na conexão ao banco de dados!";
}catch(PDOException $e){
  echo "Falha ao conectar ao banco de dados: " . $e->getMessage();
}

?>