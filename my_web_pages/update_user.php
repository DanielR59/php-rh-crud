<?php
include('db.php');
$name =  $_POST["name"];
$email =  $_POST["email-user"];
$puesto = $_POST["position"];

$query = "UPDATE users SET name='$name', position='$position' WHERE email = '$email'";
try {
    //code...
    $mysqli ->query($query) ;
// $_SESSION[]
    $_SESSION['message'] = "Usuario modificado exitosamente";
    $_SESSION['message_type'] = "success";
    header("Location: actualizar.php");
} catch (mysqli_sql_exception $th) {
    $_SESSION['message'] = "Error al actualizar el usuario";
    $_SESSION['message_type'] = "error";
    header("Location: actualizar.php");
}
?>