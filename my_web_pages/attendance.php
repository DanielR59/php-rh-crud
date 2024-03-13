<?php
include('db.php');

$response = $_POST['asistencia'];
$notes = $_POST['notas'];

$query = "INSERT INTO sessions (notes) VALUES ('$notes')";
$result = $mysqli->query($query);
$id = $mysqli->insert_id;


foreach ($response as $email => $attendance) {
    $query = "INSERT INTO attendance (email, status,session_id) VALUES ($email, '$attendance', $id)";
    $result = $mysqli->query($query);
}


$_SESSION['message'] = "Asistencia guardada";
$_SESSION['message_type'] = "success";
header("Location: asistencia.php");

?>