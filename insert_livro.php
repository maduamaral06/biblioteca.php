<?php
$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$ano_publicacao = $_POST['ano_publicacao'];
$valor = $_POST['valor'];
$autor = $_POST['autor'];

include "conexao.php";

$insert = "INSERT INTO tb_livro VALUES (NULL, '$titulo', '$categoria', '$ano_publicacao', '$valor', '$autor')";

$query = mysqli_query($conexao, $insert);


echo "Livro inserido com sucesso";
?>