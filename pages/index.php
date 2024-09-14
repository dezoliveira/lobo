<?php
  session_start();
  $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="../../public/images/favicon.png">
  <link rel="stylesheet" href="../public/css/index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=SUSE:wght@100..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Lobo</title>
</head>
<body>
  <nav class="navbar">
    <ul class="nav-items">
      <li class="nav-item">INICIO</li>
      <li class="nav-item">SERVIÇOS</li>
      <li class="nav-item">CONFIGURAÇÕES</li>
      <li class="nav-item">SAIR</li>
    </ul>
  </nav>
  <main>
    <div>
      <p>Hello, <?= $username ?></p>
    </div>
  </main>
  <script src="../../public/js/register.js"></script>
</body>
</html>