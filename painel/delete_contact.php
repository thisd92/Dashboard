<?php

include 'conection.php';

$id = $_POST['id'];
$name = $_POST['name'];


$sql = "DELETE FROM agenda WHERE id = $id";
$delete = mysqli_query($conection,$sql);

header('Location: list_contact.php?msg=2');



?>