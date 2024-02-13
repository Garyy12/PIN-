
<?php
  require 'scripts/funciones.php';
  if(! haIniciadoSesion() )
  {
  	header('Location: index.html');
  }
  conectar();
  $categorias = getCategoriasPorUser();
?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/minifav.png">
    <title>Bienvenido Usuario</title>
   <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/chat.css">
                   <!-- Agrega el enlace a Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   
    
</head>
 <?php include './php/header-admin.php'; ?>




<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
    <label for="btn-menu"> &#10005; </label>
		<nav>
			<a href="panelUsuario.php">Home</a>
			<a href="editar-perfil.php">Perfil</a>
			
	
		</nav>
		
	</div>
</div>

<body>


    <br><br><br>


<body>
<div class="container mt-5">
    <br><br></br> 
  <div class="row justify-content-center">
<center> <h1 style="color:Black;">Bienvenido, <?= $_SESSION['usuario'] ?>.</h1></center>
<center><p class="lead" style="color:#a7709b">Nivel de usuario: <?php $idnivel2 = nivel_id(); echo "$idnivel2"; ?> <br></p>
</div>
</div>
<div class="carousel-container">
  <ul class="carousel">
    <li><img src="../carrusel-chat/1.png" alt="Imagen 1"></li>
    <li><img src="../carrusel-chat/2.png" alt="Imagen 2"></li>
    <li><img src="../carrusel-chat/3.png" alt="Imagen 3"></li>
    <li><img src="../carrusel-chat/4.png" alt="Imagen 3"></li>
    <!-- Agrega más imágenes según sea necesario -->
  </ul>
  <button class="carousel-prev">&#9664;</button>
  <button class="carousel-next">&#9654;</button>
</div>
<script src="../js/chat.js"></script>
</body>
<br>

<iframe src="https://widget.getcody.ai/99c97da2-a345-4e43-a13a-99122e4cc30b" style="border:0px;" name="codyai" scrolling="no" frameborder="1" marginheight="0" marginwidth="0" height="800px" width="100%" allowfullscreen></iframe>
</div>



</body>

<footer class="site-footer seccion">  
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="#">Quiénes somos</a>
                <a href="contacto.php">Contacto</a> 
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2023 &copy; </p>
        </div>
    </footer>

</html>
             