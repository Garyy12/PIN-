<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wwidth=device-width,user-scalable=no, initial-scale=1.0,maximun-scale=1.0,minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.ico">
    <title>MICHOACAN</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="1cs.css">
    <link rel="stylesheet" href="../../../css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  
    
   <!-- Agrega el enlace a Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
<header class="header">
	<div class="container">
		<div class="btn-menu">
            <!-- En el index.html -->
<label id="milabel" class="menu-icon-index" for="btn-menu"><i class="fas fa-bars"></i></label>
		</div>
		<div class="logo">
			<a href="index.php">
				<img style="width: 90px" src="images/4.1.png" alt="Logotipo">
			</a>
			<h1>Gobierno Del Supremo Consejo Indígena Nacional</h1>
		</div>
		<nav class="menu">
		<!--		<a href="#">Inicio</a> ---->
			<a href="../../index.php">Volver al Mapa desplegable</a>
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
			<a href="../../../panelUsuario.php">Inicio</a>
			<a href="../../../editar-perfil.php">Perfil</a>
			<a href="../../../chat.php">Chat sesoria legal</a>
		</nav>
		
	</div>
</div>

<body>
    

<br><br><br><br><br><br>
      <center><h2>Pueblos y comunidades Indígenas</h2></center>
      <center><h2>Michoacan</h2></center>
    

    <section class="imagen-central">
        <div class="contenedor-imagen">
        <img src="images/14.jpg" alt="Imagen Central">
        </div>
    </section>
    
        <!-- Sección 1 -->
<section class="seccion contenedor extras">
    <h2 class="fw-300 ">Noticias</h2>
    <!-- Contenido de la sección 1 -->
</section>
    <!-- Sección 2 -->
    <section class="seccion contenedor extras">
    <h2 class="fw-300 ">Apoyos Sociales</h2>
    <!-- Contenido de la sección 2 -->
</section>
    <!-- Sección 3 -->
    <section class="seccion contenedor extras">
    <h2 class="fw-300 ">Servicios Medicos</h2>
    <!-- Contenido de la sección 3 -->
</section>
    <!-- Sección 4 -->
    <section class="seccion contenedor extras">
    <h2 class="fw-300 ">Proveedores</h2>
    <!-- Contenido de la sección 4 -->
</section>
    <!-- Sección 5 -->
    <section class="seccion contenedor extras">
    <h2 class="fw-300 ">Artesanos</h2>
    <!-- Contenido de la sección 5 -->
</section>

    <main class="seccion contenedor">
        
      
        <h2 class="fw-300 centrar-texto">Últimos Blogs</h2>
        <div class="contenedor-anuncios">
        <?php
    
    $conexion=mysqli_connect('127.0.0.1','u889522149_indigenas','123Indigenas.','u889522149_indigenas');
            //$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
            
             // Consulta SQL para obtener los datos de las entradas
             $sql = "SELECT  id,titulo, descripcion, categoria, imagen FROM noticias where categoria = 'Michoacan'";
        
             // Ejecutar la consulta
             $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
            //Esta parte es para limitar los caracteres en la prevía
            $palabras = explode(" ", $mostrar ['descripcion'] ); // Dividir el texto en palabras
            $numPalabras = 30; // Número de palabras que se mostrarán
            
            $contenidoLimitado = implode(" ", array_slice($palabras, 0, $numPalabras)); // Unir las primeras palabras nuevamente
            
         ?>
       
            <div class="anuncio">
                <img src="../../../<?php echo $mostrar ['imagen'];  ?> " alt="Imagen noticia">
                <div class="contenido-anuncio">
                    <h3> <?php echo $mostrar ['titulo']; ?> </h3>
                    <p><?php echo $contenidoLimitado  ?> </p>
                    <p class="precio"><?php echo $mostrar ['categoria']; ?> </p>
                    <form action="../../../noticia.php" method="GET">
                      <input type="hidden" name="id" value="<?php echo $mostrar ['id']; ?>">
                      <button class="boton boton-amarillo d-block" type="submit">Leer Blog</button>
                    </form>
                </div>
            </div>    
            <?php 
		    }
		    ?>
        </div>
        
		
    </main>


    <footer class="site-footer seccion">  
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="#">Quiénes somos</a>
                <a href="../../../contacto.php">Contacto</a> 
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2023 &copy; </p>
        </div>
    </footer>
</body>
</html>