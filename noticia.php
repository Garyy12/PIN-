<?php
include 'php/conexion.php';
	
	//$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
	
     // Consulta SQL para obtener los datos de las entradas
     $sql = "SELECT  titulo, descripcion, categoria, imagen FROM noticias";
     $noticia_id = $_GET['id']; // Recupera el ID de la noticia desde la URL

    $sql = "SELECT * FROM noticias WHERE id = $noticia_id";
    $result = $conectar->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $titulo = $row["titulo"];
        $descripcion = $row["descripcion"];
        $categoria = $row["categoria"];
        $imagen = $row["imagen"];
        $id = $row["id"];
    } else {
        echo "No se encontró la noticia";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/minifav.png">
    <title>Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>






<body>
<?php include './php/header.php'; ?>


    <div class="centrar-texto">
        <h1 class="fw-300 centrar-texto"><?php echo $titulo  ?> </h1>
        <br>  <br>  <br>  <br>  <br>
        <img src="<?php echo $imagen ?> " alt="Imagen Anuncio">
    </div>
    

    <main class="contenedor seccion contenido-centrado">
        <div class="resumen-propiedad">
            <p class="precio"><?php echo $categoria  ?> </p>
           
        </div><!--.resumen-propiedad-->

        <p><?php echo nl2br($descripcion);  ?> </p>

    </main>

    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="#">Quiénes somos</a>
                <a href="contacto.php">Contacto</a>
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2023 &copy; </p>
        </div>
    </footer>
</body>
</html>