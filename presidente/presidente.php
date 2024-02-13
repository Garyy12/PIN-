<?php
  require '../scripts/funciones.php';
  if(! haIniciadoSesion() || ! presidente() )
  {
    header('Location: index.php');
  }

  conectar();
  $usuarios = getUsuarios();
  desconectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="icon" href="../img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href ="../css/style.css">   
    <link rel="stylesheet" type= "text/css" href ="../css/styles.css">  
 <center>       <title>Panel de Administración de Permisos</title>

</head>
    
<header class="header">
	<div class="container">
		<div class="btn-menu">
            <!-- En el index.html -->
<label id="milabel" class="menu-icon-index" for="btn-menu"><i class="fas fa-bars"></i></label>
		</div>
		<div class="logo">
			<a href="index.php">
				<img style="width: 90px" src="../img/4.1.png" alt="Logotipo">
			</a>
			<h1>Pueblos y comunidades indígenas</h1>
		</div>
		<nav class="menu">
		<!--		<a href="#">Inicio</a> ---->
			<a href="#"><?= $_SESSION['usuario']?> .</a>
		</nav>
	</div>
</header>




<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
    <label for="btn-menu"> &#10005; </label>
		<nav>
			<a href="#">Blog</a>
			<a href="#">Noticias</a>
			<a href="#">Facebook</a>
			<a href="#">Youtube</a>
			<a href="#">Instagram</a>
			<a href="../scripts/cerrar-sesion.php">Cerrar sesión</a>
		</nav>
		
	</div>
</div>



<body>

<div class="barra">
      
  <div  style="visibility:hidden">Gestión de sesiones </div>
     
  </div>
      
     
  
  <div class="bienvenido">
    <h1>Bienvenido, <?= $_SESSION['usuario']?> .</h1>
      <p>Por favor seleccione una de las opciones del menú.</p>
  </div>
  
    
  
    
  
  
  
  
        
  <!--- -SECCION DEL FONDO EN MOVIMIENTO--->  
  <div class="bg"></div>
  <div class="bg bg2"></div>
  <div class="bg bg3"></div>

  <?php include './menu-superior.php'; ?>
  <?php include './menu-lateral.php'; ?> 
          
  
  
  
  
          
<!---      Bootstrap core JavaScript
      ================================================== ---->
      <script src="js/jquery-1.7.2.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/signin.js"></script> 
  

</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<footer class="site-footer seccion"> 
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="#">Quiénes somos</a>
                <a href="../contacto.php">Contacto</a> 
            </nav>
            <p class="copyright-1">Todos los Derechos Reservados 2023 &copy; </p>
        </div>
    </footer>

    
</html>
