<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Cadastro de Categoria</title>
</head>

<body class="bg-light">
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-sm p-4" style="max-width: 900px; width: 100%;">
      <h2 class="mb-4 text-center">Cadastrar Categoria</h2>
      <form action="inserir-categoria.php" method="post">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="preencha o nome da categoria" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="fornecedor" class="form-label">Fornecedor</label>

            <?php
            include_once 'buscar-fornecedor.php';
            $fornecedores = listarFornecedores();

            echo '<select name="fornecedor" class="form-select">';
              echo '<option value="fornecedor">selecione um fornecedor</option>';
              foreach ($fornecedores as $fornecedor) {
                echo '<option value="' . $fornecedor['id'] . '">' . $fornecedor['nome'] . '</option>';
              }
            echo '</select>';
            ?>
          </div>
        </div>
        <button type="submit" class="btn btn-primary w-100">Salvar</button>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>