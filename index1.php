<?php
session_start(); //iniciar sessão
include './painel/conexao/conection.php';
include './painel/script/password.php';

$mail = $_POST['mail'];
$password = $_POST['password']; // client

$sql = "SELECT * FROM usuario WHERE mail = '$mail'";
$search = mysqli_query($conection,$sql);
$array = mysqli_fetch_array($search);

$passwordBase = $array['password']; // database

$passwordEnc = sha1($password); // encriptando password client

if($passwordEnc == $passwordBase){
    $_SESSION['mail'] = $mail;
    header('Location: ./painel/index.php');
}else {
    header('Location: index.php?msg=2');
}



?>