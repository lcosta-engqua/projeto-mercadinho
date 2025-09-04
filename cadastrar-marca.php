<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Marca</title>
</head>

<body>
  <form action="inserir-marca.php" method="post">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" placeholder="nome da marca">

    <?php
    include_once 'buscar-fornecedor.php';

    $fornecedores = listarFornecedores();
    echo '<select name="fornecedor">';
      echo '<option value="fornecedor">selecione um fornecedor</option>';
      foreach ($fornecedores as $fornecedor) {
        echo '<option value="' . $fornecedor['id'] . '">' . $fornecedor['nome'] . '</option>';
      }
    echo '</select>';
    ?>

    <button type="submit">Cadastrar</button>
  </form>
</body>

</html>