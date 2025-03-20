<?php
include '../includes/db.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO usuarios (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";
$conn->query($sql);
header("Location: ../index.php");
?>
