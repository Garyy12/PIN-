<?php
include 'php/conexion.php';
	
// Verificar si el formulario ha sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Realizar la conexión a la base de datos
        $conectar;

        // Verificar si la conexión fue exitosa
        if (mysqli_connect_errno()) {
            echo "Error al conectar a la base de datos: " . mysqli_connect_error();
            exit();
        }

        // Obtener los valores del formulario
        $titulo = $_POST["titulo"];
        $descripcion = $_POST["descripcion"];
        $categoria = $_POST["categoria"];

       
        // Procesar la imagen
        $nombreArchivo = $_FILES["imagen"]["name"];
        $tipoArchivo = $_FILES["imagen"]["type"];
        $tamanoArchivo = $_FILES["imagen"]["size"];
        $rutaTemporal = $_FILES["imagen"]["tmp_name"];

        // Guardar la imagen en una ubicación específica
        $rutaDestino = "img/" . $nombreArchivo;
        move_uploaded_file($rutaTemporal, $rutaDestino);

        // Insertar los datos en la base de datos
        $query = "INSERT INTO noticias (titulo, descripcion, categoria, imagen) VALUES ('$titulo', '$descripcion', '$categoria', '$rutaDestino')";

        if (mysqli_query($conectar, $query)) {
     
        
      
            
            
           } else {
               echo "Error al guardar los datos: " . mysqli_error($conectar);
           
           }
        
        mysqli_close($conectar);
        
        
    }
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/minifav.png">
    <title>Blogs</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="../src/richtext.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../src/jquery.richtext.js"></script>
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
				<img style="width: 110px" src="../img/Logo-comunidad1.png"  alt="Logotipo">
			</a>
			<h1>Plataforma Indígena Nacional</h1>
		</div>
		<nav class="menu">
		
			<a href="lista_blogs.php">Listado de Blogs</a>
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
			<a href="admin/index.php">Inicio Panel Usuario</a>
		
			
		</nav>
		
	</div>
</div>

<body>
        
    <h1 class="fw-300 centrar-texto">Sube tu entrada</h1>
    

    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw-300 centrar-texto">
   
      </div>
        </h2>

        <form class="contacto" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Noticia</legend>
                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo" placeholder="Coloca un titulo">

                <label for="descripcion">Coloca el contenido de tu blog: </label>
                <textarea name="descripcion" rows="4" cols="50" required></textarea><br>

                <label for="categoria">Selecciona tu estado: </label>
                <select name="categoria" required>
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Aguascalientes">Aguascalientes</option>
      <option value="Baja California">Baja California</option>
      <option value="Baja California Sur">Baja California Sur</option>
      <option value="Campeche">Campeche</option>
      <option value="Chiapas">Chiapas</option>
      <option value="Chihuahua">Chihuahua</option>
      <option value="CDMX">Ciudad de México</option>
      <option value="Coahuila">Coahuila</option>
      <option value="Colima">Colima</option>
      <option value="Durango">Durango</option>
      <option value="Estado de México">Estado de México</option>
      <option value="Guanajuato">Guanajuato</option>
      <option value="Guerrero">Guerrero</option>
      <option value="Hidalgo">Hidalgo</option>
      <option value="Jalisco">Jalisco</option>
      <option value="Michoacán">Michoacán</option>
      <option value="Morelos">Morelos</option>
      <option value="Nayarit">Nayarit</option>
      <option value="Nuevo León">Nuevo León</option>
      <option value="Oaxaca">Oaxaca</option>
      <option value="Puebla">Puebla</option>
      <option value="Querétaro">Querétaro</option>
      <option value="Quintana Roo">Quintana Roo</option>
      <option value="San Luis Potosí">San Luis Potosí</option>
      <option value="Sinaloa">Sinaloa</option>
      <option value="Sonora">Sonora</option>
      <option value="Tabasco">Tabasco</option>
      <option value="Tamaulipas">Tamaulipas</option>
      <option value="Tlaxcala">Tlaxcala</option>
      <option value="Veracruz">Veracruz</option>
      <option value="Yucatán">Yucatán</option>
      <option value="Zacatecas">Zacatecas</option>
 
                </select>

                <label for="imagen">Sube tu imagen "solo imagenes PNG, JPG"</label>
                <input class="boton" type="file" name="imagen" placeholder="Sube tu imagen" required>


                <div class="page-wrapper box-content">

                <textarea class="content" name="example"></textarea>
                <textarea class="content2" name="example2"></textarea>
                </div>

                <script>
                $(document).ready(function() {
                    $('.content').richText();
                    $('.content2').richText();
                });
                </script>



            </fieldset>


                

            <input type="submit" value="Subir" class="boton boton-verde">

        </form>
    </main>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="#">Quiénes somos</a>
                <a href="#">Contacto</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2023 &copy; </p>
        </div>
    </footer>
</body>
</html>