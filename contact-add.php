<?php

include('database.php');

if (isset($_POST['name']) && isset($_POST['telefono']) && isset($_POST['email']) && isset($_POST['mensaje'])) {
  $name = mysqli_real_escape_string($connection, $_POST['name']);
  $telefono = mysqli_real_escape_string($connection, $_POST['telefono']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $mensaje = mysqli_real_escape_string($connection, $_POST['mensaje']);
  
  $query = "INSERT INTO contacts (name, telefono, email, mensaje) VALUES ('$name', '$telefono', '$email', '$mensaje')";
  $result = mysqli_query($connection, $query);
  
  if (!$result) {
    die('Query Failed.');
  }
  
  echo "Mensaje enviado correctamente";
}

?>
