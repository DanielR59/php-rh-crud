<?php
include('db.php');

$email = $_GET['id'];
$query = "DELETE FROM users WHERE email = '$email'";

$result = $mysqli -> query($query);

$_SESSION['message'] = "Usuario eliminado";
$_SESSION['message_type'] = "success";
header("Location: bajas.php");


?>