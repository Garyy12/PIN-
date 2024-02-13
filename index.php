<?php
    
    include 'scripts/funciones.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wwidth=device-width,user-scalable=no, initial-scale=1.0,maximun-scale=1.0,minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/minifav.png">
    <title>Supremo Consejo Indígena Nacional</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  
    
   <!-- Agrega el enlace a Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
    <?php include './php/header.php'; ?>
 <!-- Conexión de Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TZFWEKH1YG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TZFWEKH1YG');
</script>
    <div id="loading-overlay">
    <div class="overlay-bg"></div>
    <div class="loading-content">
    <img src="./img/logoinicio.png" alt="Cargando..." class="loading-logo">
    <p>
    <span class="large-letter">P</span><span>L</span><span>A</span><span>T</span><span>A</span><span>F</span><span>O</span><span>R</span><span>M</span><span>A</span><span></span><span>&nbsp;</span><span>I</span><span>N</span><span>D</span><span>I</span><span>G</span><span>E</span><span>N</span><span>A</span><span></span>&nbsp;&nbsp;</span><span>N</span><span>A</span><span>C</span><span>I</span><span>O</span><span>N</span><span>A</span><span>L</span><span></span>
</p>
    </div>
</div>

<div id="content" class="hidden-content">   </div>

<script>
   
var loadingText = document.querySelector(".loading-content p");


var letters = loadingText.querySelectorAll("span");


function showLetters(index) {
    if (index < letters.length) {
        letters[index].style.visibility = "visible";
        setTimeout(function() {
            showLetters(index + 1);
        }, 100);  
    }
}


window.onload = function() {
    showLetters(0);
};
       
        var loadingOverlay = document.getElementById("loading-overlay");

        
        var content = document.getElementById("content");

        
        if (loadingOverlay && content) {
           
            setTimeout(function() {
               
                content.style.display = "block"; 
                loadingOverlay.remove(); 
            }, 3000);
        }
    </script>
    





<div class="capa"></div>
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
    <label for="btn-menu"> &#10005; </label>
		<nav>
			<a href="">Menú </a>
			<a href="php/signup.php">Registrate</a>
			<a href="noticias.php">Blog</a>
			<a href="beneficios.php">Beneficios</a>
		    <a href="Instituciones-Internas/Politica-interna.php">Instituciones Internas</a>
		    <a href="Instituciones externas/Politica externa.php">Instituciones Externas</a>
            <a href="proyectos.php">Proyectos</a>
            <a href="eventos.php">Eventos</a>
            <a href="donar.php">Donaciones</a>
		
		</nav>
		
	</div>
</div>

<body>

    <!-- <br>
    <br>
        <center><h1>Supremo Consejo Indigena Nacional</h1></center> 
        <br>
      <main class="seccion-inferior contenedor seccion centrar-texto">
     <section class="blog">

            <video src="./video/videoindigenas.webm" width="350px" height="600px" controls autoplay >
                 <source src=”./video/videoindigenas.webm” type=”video/mp4”>
                Tu navegador no admite la etiqueta de video.
              </video>
              -->
              <!--
        </section>
      
        <section class="testimoniales">
            <div class="contenedor contenido-contacto">
                <h2>Imprescriptibles, Inalienables e Inembargables</h2>
                <p>Somos el Congreso Nacional Indígena y  el futuro de nuestros pueblos es prioridad</p>
                <br></br>   
                <h1>¡Forma parte de nuestra comunidad afiliada!</h1>
                  
                <p>Da clic en el boton para llenar el formulario de registro</p>
                <a href="regis-afiliado.php" class="boton boton-amarillo">Registrate</a>
            </div>
        </section>
    </main>
     -->
    <section class="contenedor seccion ">
       

        <div class="iconos-nosotros ">
            <div class="icono">
                <img src="./img/icono-mision2.svg" alt="Icono Seguridad">
                <h3>MISIÓN DE CONSEJO INDIGENA NACIONAL</h3>
                <p>El Supremo Consejo Indigena Nacional tiene como objeto definir, normar, diseñar, establecer, ejecutar, orientar, coordinar, promover, dar seguimiento y evaluar las políticas, programas, proyectos, estrategias y acciones públicas, para garantizar el ejercicio y la implementación de los derechos de los pueblos indígenas, así como su desarrollo integral y sostenible y el fortalecimiento de sus culturas e identidades.</p>
            </div>
            <div class="icono">
                <img src="./img/icono-vision.svg" alt="Icono Mejor Precio">
                <h3>VISION DE CONSEJO INDIGENA NACIONAL</h3>
                <p>El Supremo Consejo Indigena Nacional tiene la finalidad de ser la casa de todos los pueblos indígenas, un espacio donde los pueblos originarios encuentren el espacio de reflexión y solidaridad para fortalecer nuestras luchas de resistencia y rebeldía, con nuestras propias formas de organización, de representación y toma de decisiones.</p>
            </div>
            <div class="icono">
                <img src="./img/icono-vision.svg" alt="Icono Mejor Precio">
                <h3>Conoce nuestra universidad</h3>
                <p>La Universidad Intercultural Digital es una institución educativa de vanguardia que ofrece una educación superior de calidad, accesible a todos.

Nuestra universidad ofrece una amplia gama de programas de estudio, desde licenciaturas hasta posgrados, en áreas como ciencias, humanidades, negocios, y tecnología. Nuestros programas son diseñados para preparar a nuestros estudiantes para el éxito en el mundo laboral.
La Universidad Intercultural Digital es una universidad 100% digital, lo que significa que nuestros estudiantes pueden estudiar desde cualquier lugar del mundo, en cualquier momento. Esto hace que nuestra educación sea accesible a personas de todos los orígenes y circunstancias. Si estás buscando una educación superior de calidad, accesible y flexible, la Universidad Intercultural Digital es la opción ideal para ti. ¡Regístrate hoy mismo y comienza tu camino hacia el éxito!</p>
            </div>
            <div class="form-group d-flex justify-content-center">
<a href="beneficios-uni.php" class="btn btn-primary btn-lg btn-shadow mx-auto my-auto">¡Registrate ya!</a>
</div>
        </div>
    </section>

    
    <!-- Consulta para los blogs -->
      
    
    <main class="seccion contenedor">
      
        <h2 class="fw-300 centrar-texto">Últimos Blogs</h2>
        <br>
        <div class="contenedor-anuncios">
        <?php
      $conexion=mysqli_connect('localhost','root','','indo');
       
        	

	
            //$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
            
             // Consulta SQL para obtener los datos de las entradas
             $sql = "SELECT  id,titulo, descripcion, categoria, imagen FROM noticias ORDER BY id DESC LIMIT 3";
        
             // Ejecutar la consulta
             $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
            //Esta parte es para limitar los caracteres en la prevía
            $palabras = explode(" ", $mostrar ['descripcion'] ); // Dividir el texto en palabras
            $numPalabras = 30; // Número de palabras que se mostrarán
            
            $contenidoLimitado = implode(" ", array_slice($palabras, 0, $numPalabras)); // Unir las primeras palabras nuevamente
            
         ?>
       
            <div class="anuncio">
                <img src="<?php echo $mostrar ['imagen'];  ?> " alt="Imagen noticia">
                <div class="contenido-anuncio">
                    <h3> <?php echo $mostrar ['titulo']; ?> </h3>
                    <p><?php echo $contenidoLimitado  ?> </p>
                    <p class="precio"><?php echo $mostrar ['categoria']; ?> </p>
                    <form action="noticia.php" method="GET">
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

            
    
            
  <!-- Consulta para los proyectos -->

    <main class="seccion contenedor">
      
        <h2 class="fw-300 centrar-texto">Proyectos Recientes</h2>
        <br>
        <div class="contenedor-anuncios">
        <?php
      $conexion=mysqli_connect('localhost','root','','indo');
       
        	

	
            //$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
            
             // Consulta SQL para obtener los datos de las entradas
             $sql = "SELECT  id, titulo, contenido, estado, miniatura FROM proyectos ORDER BY id DESC LIMIT 3";
        
             // Ejecutar la consulta
             $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
            //Esta parte es para limitar los caracteres en la prevía
            $palabras = explode(" ", $mostrar ['contenido'] ); // Dividir el texto en palabras
            $numPalabras = 30; // Número de palabras que se mostrarán
            
            $contenidoLimitado = implode(" ", array_slice($palabras, 0, $numPalabras)); // Unir las primeras palabras nuevamente
            
         ?>
       
            <div class="anuncio">
                <img src="<?php echo $mostrar ['miniatura'];  ?> " alt="Imagen proyecto">
                <div class="contenido-anuncio">
                    <h3> <?php echo $mostrar ['titulo']; ?> </h3>
                    <p><?php echo $contenidoLimitado  ?> </p>
                    <p class="precio"><?php echo $mostrar ['estado']; ?> </p>
                    <form action="proyecto.php" method="GET">
                      <input type="hidden" name="id" value="<?php echo $mostrar ['id']; ?>">
                      <button class="boton boton-amarillo d-block" type="submit">Leer Proyecto</button>
                    </form>
                </div>
            </div>    
            <?php 
		    }
		    ?>
        </div>
        
		
    </main>

      <!-- Consulta para los eventos -->

      <main class="seccion contenedor">
      
      <h2 class="fw-300 centrar-texto">Eventos Recientes</h2>
      <br>
      <div class="contenedor-anuncios">
      <?php
    $conexion=mysqli_connect('localhost','root','','indo');
     
          

  
          //$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
          
           // Consulta SQL para obtener los datos de las entradas
           $sql = "SELECT  id, titulo, contenido, estado, miniatura FROM eventos ORDER BY id DESC LIMIT 3";
      
           // Ejecutar la consulta
           $result=mysqli_query($conexion,$sql);

      while($mostrar=mysqli_fetch_array($result)){
          //Esta parte es para limitar los caracteres en la prevía
          $palabras = explode(" ", $mostrar ['contenido'] ); // Dividir el texto en palabras
          $numPalabras = 30; // Número de palabras que se mostrarán
          
          $contenidoLimitado = implode(" ", array_slice($palabras, 0, $numPalabras)); // Unir las primeras palabras nuevamente
          
       ?>
     
          <div class="anuncio">
              <img src="<?php echo $mostrar ['miniatura'];  ?> " alt="Imagen proyecto">
              <div class="contenido-anuncio">
                  <h3> <?php echo $mostrar ['titulo']; ?> </h3>
                  <p><?php echo $contenidoLimitado  ?> </p>
                  <p class="precio"><?php echo $mostrar ['estado']; ?> </p>
                  <form action="evento.php" method="GET">
                    <input type="hidden" name="id" value="<?php echo $mostrar ['id']; ?>">
                    <button class="boton boton-amarillo d-block" type="submit">Leer Evento</button>
                  </form>
              </div>
          </div>    
          <?php 
          }
          ?>
      </div>
      
      
  </main>




    

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

    
