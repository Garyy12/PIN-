<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="wwidth=device-width,user-scalable=no, initial-scale=1.0,maximun-scale=1.0,minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="icon" type="image/png" href="img/minifav.png">
    <title>Login</title>
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">    

</head>
<?php include './php/header.php'; ?>



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
  <div class="barra">
    <div class="mensaje"></div>
  </div>
<div class="contenedor seccion-login">
  <div class="login-box">
    <h2>Recuperación de contraseña</h2>
    <form action="scripts/recovery.php" method="post">
      <div class="user-box">
    
        <input type="email" name="email" placeholder="Ingresa tu correo electrónico" required="">
    
      
      <div class="button-container">
          
      <input id="inicio" type="submit" value= "Recuperar contraseña" >
          
        
      </div>
      
   
    </form>
   
      
  </div>
 </div>
</body>
</html>