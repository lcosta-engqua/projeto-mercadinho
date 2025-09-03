<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
</head>

<body>
  <form action="inserir-produto.php" method="post">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" placeholder="nome do produto" required>

    <label for="descricao">Descrição</label>
    <input type="text" name="descricao" id="descricao" placeholder="descricao do produto" required>

    <?php
    include_once 'buscar-marcas.php';
    include_once 'buscar-categorias.php';

    $marcas = listarMarcas();
    echo '<select name="marcas" required>';
      echo '<option value="marcas">selecione uma marca</option>';
      foreach ($marcas as $marca) {
        echo '<option value="' . $marca['id'] . '">' . $marca['nome'] . '</option>';
      }
    echo '</select>';

    $categorias = listarCategorias();
    echo '<select name="categorias" required>';
      echo '<option value="categorias">selecione uma categoria</option>';
      foreach ($categorias as $categoria) {
        echo '<option value="' . $categoria['id'] . '">' . $categoria['nome'] . '</option>';
      }
    echo '</select>';
    ?>

    <button type="submit">Cadastrar</button>
  </form>
</body>

</html>