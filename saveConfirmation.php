<?php
if (isset($_POST['name']) &&  isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['track']) && isset($_POST['message'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $track = $_POST['track'];
  $message = $_POST['message'];

  include("conexion.php");
  $conn = conectar();
  $sql = "INSERT INTO confirmation(nombre, email, phone, track, message) VALUES ('$name', '$email', '$phone', '$track', '$message')";

  if ($conn->query($sql) === TRUE) {
    header("Location: success.php");
  } else {
    header("Location: index.php");
  }

  $conn->close();
}
