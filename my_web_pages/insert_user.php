<?php
include('db.php');
$name =  $_POST["name"];
$email =  $_POST["email-user"] ."@". $_POST["email-domain"];
$puesto = $_POST["position"];

$query = "INSERT INTO users(name,email,position) VALUES ('$name','$email','$puesto')";
try {
    //code...
    $mysqli ->query($query) ;
// $_SESSION[]
    $_SESSION['message'] = "Usuario dado de alta";
    $_SESSION['message_type'] = "success";
    header("Location: altas.php");
} catch (mysqli_sql_exception $th) {
    $_SESSION['message'] = "No se pudo dar de alta el usuario";
    $_SESSION['message_type'] = "error";
    header("Location: altas.php");
}





?>