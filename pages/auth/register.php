<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="../../public/images/favicon.png">
  <link rel="stylesheet" href="../../public/css/register.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=SUSE:wght@100..800&display=swap" rel="stylesheet">
  <title>Lobo</title>
</head>
<body>
  <main>
    <div class="login-form">
      <form method="post" action="../../actions/registration.php" onsubmit="return validateForm()">
        <div class="logo">
          <img src="../../public/images/lobo.png" loading=lazy/>
        </div>
        <input id="name" type="text" name="name" placeholder="Nome" required/>
        <input id="email" type="email" name="email" placeholder="Email" required/>
        <input id="password" type="password" name="password" placeholder="Senha" required/>
        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Confimar Senha" required/>
        <button type="submit" id="btnRegister">CRIAR CONTA</button>
        <span>
          <small>Já tem uma conta ? <a href="login.php">clique aqui</a></small>
        </span>
      </form>
  </main>
  <script src="../../public/js/register.js"></script>
</body>
</html>
<?php
// if(isset($_POST['submit'])){
//   header("Location: ../../actions/registration.php");
// }
?>