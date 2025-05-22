<?php
$login = $_POST['login'];
$senha = $_POST['senha'];

include "conexao.php";

$select = "SELECT * FROM tb_user WHERE login = '$login'";

$query = mysqli_query($conexao,$select);

$result = mysqli_fetch_array($query);

$login_banco = $result ['login'];
$senha_banco = $result ['senha'];

if ($login == $login_banco && $senha == $senha_banco){
    header('location: home.html');
}
else{
    echo "<script>alert('Usuário Invalido'); history.back();</script>";
}





?>