<?php

include 'conection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['tel'];
$business = $_POST['business'];


$sql = "UPDATE `agenda` SET `name`='$name',`mail`='$mail',`phone`='$phone',`business`='$business' WHERE id = $id";
$insert = mysqli_query($conection,$sql);

header('Location: list_contact.php?msg=1');



?>