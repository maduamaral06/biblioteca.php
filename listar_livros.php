<?php 
  include 'conexao.php';
  $select = "SELECT * FROM tb_livro";
  $query = mysqli_query($conexao, $select);
  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <h2>Listar Livros</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TITULO</th>
      <th scope="col">CATEGORIA</th>
      <th scope="col">ANO DE PÚBLICAÇÃO</th>
      <th scope="col">AUTOR</th>
      <th scope="col">VALOR</th>
    </tr>
    
  </thead>
  <tbody> 
  <?php while ($result = mysqli_fetch_array($query)) { ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $result['titulo']; ?></td>
      <td><?php echo $result['categoria']; ?></td>
      <td><?php echo $result['ano_publicacao']; ?></td>
      <td><?php echo $result['nm_autor']; ?></td>
      <td><?php echo $result['vl_livro']; ?></td>

    </tr>
<?php } ?>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

















