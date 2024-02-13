<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="wwidth=device-width,user-scalable=no, initial-scale=1.0,maximun-scale=1.0,minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" type="image/png" href="img/minifav.png">
    <title>Login</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

</head>
<?php
  // ...
  include './php/header.php';

  // Solución: Verificar si ya existe una sesión activa y redirigir al usuario a panelUsuario.php
  session_start();
  if(isset($_SESSION['usuario'])){
    header('Location: panelUsuario.php');
    exit();
  }
?>




<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
    <label for="btn-menu"> &#10005; </label>
		<nav>
			<a href="#">Iniciar sesión</a>
			<a href="#">Blog</a>
			<a href="#">Noticias</a>
			<a href="#">Facebook</a>
			<a href="#">Youtube</a>
			<a href="#">Instagram</a>
		</nav>
		
	</div>
</div>

<body class="fondo">

<div class="contenedor seccion-login">
  <div class="login-box">
    <h2>Inicio de sesión</h2>
    <form action="iniciar-sesion.php" method="post">
      <div class="user-box">
          
        <input type="text" name="txtUsuario" placeholder="Ingresa tu nombre de usuario" required="">
      </div>
      <div class="user-box">
        <input type="password" id="txtClave"  placeholder="Contraseña" name="txtClave" value="" requiered>
      </div>
      
      <div class="button-container">
          
      <input id="inicio" type="submit" value= "Iniciar sesión" >
          
        <a href="../php/signup.php">
          Registrar
        </a>
        
      </div>
    </form>
     <a style="color:white" href="recovery.php">¿Olvidaste tu contraseña?</a>
    <?php 
    if(isset($_GET['message'])){
     
    ?>
      <div class="alert alert-primary" role="alert">
        <?php 
        switch ($_GET['message']) {
          case 'ok':
            echo 'Por favor, revisa tu correo';
            break;
          case 'success_password':
            echo 'Inicia sesión con tu nueva contraseña';
            break;
            
          default:
            echo 'Algo salió mal, intenta de nuevo';
            break;
        }
        ?>
      </div>
    <?php
    }
    ?>
  </div>
  </div>
</body>


</html>
