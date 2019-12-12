<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Acceso al Sistema</title>
</head>
<body>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://icon-library.net/images/icon-login/icon-login-10.jpg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="verificar.php" method ="POST">
      <input type="mail" id="login" class="fadeIn second" name="user" placeholder="Correo">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="registrar.php">¿No tienes cuenta? Registrate</a>
    </div>

  </div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>