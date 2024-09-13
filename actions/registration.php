<?php

require_once '../conn.php';

$name = $_POST['name'];
$password = base64_encode( $_POST['password']);
$email = $_POST['email'];
$date = date('Y-m-d H:i:s');

// mail search
$query = "SELECT * FROM login WHERE email = '$email' ";
$results = mysqli_query($conn, $query) or die(mysqli_error($conn));
$total_users = mysqli_num_rows($results);

// if exists
if ($total_users > 0) {
  echo "email already exists";
  exit();

}

$query = "INSERT INTO login (name, email, password, created_At) VALUES ('$name', '$email', '$password', '$date')";
$results = mysqli_query($conn, $query) or die(mysqli_error($conn));

if (!$results) {
  echo "erro 500";
  exit();

}

  echo'<script> window.location="../messages/register_success.php"; </script> ';

?>