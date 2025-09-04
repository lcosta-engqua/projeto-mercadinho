<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Produto</title>
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
    echo '<select name="marca">';
      echo '<option value="marca">selecione uma marca</option>';
      foreach ($marcas as $marca) {
        echo '<option value="' . $marca['id'] . '">' . $marca['nome'] . '</option>';
      }
    echo '</select>';

    $categorias = listarCategorias();
    echo '<select name="categoria">';
      echo '<option value="categoria">selecione uma categoria</option>';
      foreach ($categorias as $categoria) {
        echo '<option value="' . $categoria['id'] . '">' . $categoria['nome'] . '</option>';
      }
    echo '</select>';
    ?>

    <label for="preco">Preço</label>
    <input type="text" name="preco" id="preco">

    <button type="submit">Cadastrar</button>
  </form>
</body>

</html>