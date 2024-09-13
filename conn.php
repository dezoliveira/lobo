<?php
  $server = 'localhost';
  $user = 'root';
  $password = '';
  $db = 'lobo';

  $conn = mysqli_connect(
    hostname: $server,
    username: $user,
    password: $password,
    database: $db
  );

  try {
    if (!$conn){
      throw new Exception('Unable to connect');
      
    // } else {
    //   echo "Connected";
    //   header("Location:login.php");
    //   exit;
    }
  } catch (Exception $e) {
    echo $e->getMessage();
  }
?>