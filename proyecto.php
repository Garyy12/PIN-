<?php
include 'php/conexion.php';
	
	//$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
	
     // Consulta SQL para obtener los datos de las entradas
     $sql = "SELECT  titulo, contenido, estado, miniatura, banner FROM proyectos";

 
     $proyecto_id = $_GET['id']; // Recupera el ID del proyecto desde la URL

    $sql = "SELECT * FROM proyectos WHERE id = $proyecto_id";
    $result = $conectar->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $titulo = $row["titulo"];
        $contenido = $row["contenido"];
        $estado = $row["estado"];
        $miniatura = $row["miniatura"];
        $banner = $row["banner"];
        $id = $row["id"];
    } else {
        echo "No se encontró el proyecto";
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

<br>  <br>  <br>  <br>  <br>
    <div class="centrar-texto">
        <h2 class="fw-300 centrar-texto"><?php echo $titulo  ?> </h2>
        <br>  <br>  
        <img width="500px" src="<?php echo $banner ?> " alt="Imagen Anuncio">
    </div>
    

    <main class="contenedor seccion contenido-centrado">
        <div class="resumen-propiedad">
            <p class="precio"><?php echo $estado  ?> </p>
           
        </div>

        <p><?php echo nl2br($contenido);  ?> </p>

        <br></br>
       <p> <center><h2>¿Te gustaria apoyar este proyecto? </h2></center> </p>
       <br></br>
       <p> <center><h3>Da clic Aqui  </h3></center> </p>
       <br></br>

       <center>   <div id="donate-button-container">
                    <div id="donate-button"></div>
                    <script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
                    <script>
                    PayPal.Donation.Button({
                    env:'production',
                    hosted_button_id:'R3LVJSCUFPR2E',
                    image: {
                    src:'https://pics.paypal.com/00/s/ZjA1MzY0NzAtYTA4OC00MWE2LWI1ZTctZWYzNjkxN2U4YzA1/file.PNG',
                    alt:'Donate with PayPal button',
                    title:'PayPal - The safer, easier way to pay online!',
                    }
                    }).render('#donate-button');
                    </script>
                    </div> </center>
                    <br></br>
                    <p><h4>Sigue las siguientes para donaciones por paypal</h4>
                    </p>
                  <span class="dots"> </span>

                  <p class="extra">
                    <br></br>Pasos a seguir para realizar una donacion
                    <br></br>
                    Actualmente hay un error con paypal con las donaciones sin cuenta, te daremos los pasos para lograr realizar la donacion
                    <br></br> 
                    1- Si ya tienes una cuenta de paypal, inicia sesion desde la pagina de paypal, asi al abrir el link se asocie a tu cuenta automaticamente.
                    <br></br> 
                    En caso de no tener una cuenta, entra a <b>www.paypal.com</b>, para crear una.
                    <br></br> 
                    2- Una vez ya creada, da clic al boton donar dentro de esta pagina y completa los campos que se solicitan
                    Es importante verificar que este iniciada sesion de paypal, a lahora de llenar los campos correspondientes.
                    
                   
                    <br></br>
                    
                </p>

                    <input type="checkbox"for="btn1" id="btn1"> <label for="btn1"><center>Leer instrucciones</center></label>  
                    
    </main>

    
    <br></br><br></br>
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