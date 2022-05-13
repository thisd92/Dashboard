<?php

include 'conexao/conection.php';

$mail = $_POST['mail'];
$password = $_POST['password'];

$sql = "INSERT INTO usuario (mail,password) values ('$mail', sha1('$password'))";
$insert = mysqli_query($conection, $sql);

header('Location: ../index.php?msg=1');

// sha1 criptografa a senha

?>