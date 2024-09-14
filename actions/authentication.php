<?php

require_once '../conn.php';

$email = $_POST['email'];
$password = base64_encode($_POST['password']);
$date = date('Y-m-d H:i:s');

// mail search
$query = "SELECT * FROM login WHERE email = '$email' ";
$results = mysqli_query($conn, $query);
$emailValid = mysqli_num_rows($results);

$query = "SELECT * FROM login WHERE password = '$password' ";
$results = mysqli_query($conn, $query);
$passwordValid = mysqli_num_rows($results);

// if not valid
if (!($emailValid and $passwordValid)) {
  echo " '$passwordValid' and '$emailValid' ";
  exit();

}

$query = "UPDATE login SET logged_At = '$date' WHERE email = '$email' ";
mysqli_query($conn, $query);

$query = "SELECT name FROM login WHERE email = '$email' ";
$results = mysqli_query($conn, $query);
$username = $results->fetch_row()[0];

session_start();
$_SESSION['username'] = $username;

// if exists
echo'<script> window.location="../pages/index.php"; </script> ';

?>