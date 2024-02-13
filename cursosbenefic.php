<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wwidth=device-width,user-scalable=no, initial-scale=1.0,maximun-scale=1.0,minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/favicon.ico">
    <title>Beneficios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <!-- Agrega el enlace a Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <?php include './php/header.php'; ?>
    <div class="capa"></div>
    <!--	--------------->
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <label for="btn-menu"> &#10005; </label>
            <nav>
                <a href="login.php">Iniciar sesión</a>
                <a href="noticias.php">Blog</a>
                <a href="#">Noticias</a>
                <a href="#">Facebook</a>
                <a href="#">Youtube</a>
                <a href="#">Instagram</a>
            </nav>

        </div>
    </div>
    <br>
    <br>
    <br>

    <style>
        body {
            display: grid;
            grid-template-rows: auto 1fr auto;
            min-height: 100vh;
            margin: 0;
        }
        .imagenes-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }
        .curso-imagen {
            width: 400px;
            margin: 0 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
        }
        .formulario-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 200px);
        }
    </style>

</head>
<body>
    <br>
    <br>
    <h2 class="fw-700 centrar-texto margin">CURSOS GRATUITOS POR TENER TU TRAJETA SCIN</h2>
    <div class="imagenes-container">
    <img class="curso-imagen" src="./tarjetas/imagen1.jpg" alt="Imagen 1">
    <img class="curso-imagen" src="./tarjetas/imagen2.jpg" alt="Imagen 2">
    </div>
    <main class="seccion-inferior contenedor seccion centrar-texto">
        <section class="testimoniales">
            <div class="contenedor contenido-contacto">
                <!-- La parte de los cursos va aquí -->
                <form method="post" action="./scripts/validar9.php">
                    
                    <p>Para adquirir los beneficios ingresa los números.</p>
                    <input type="text" name="CadenaV" placeholder="Estos números están en tu tarjeta SCIN">
                    <button class="boton-rojo" type="submit"> Aceptar </button> 
                </form>
            </div> 
        </div>
    </main>
    <br>
                <!---boton de instrucciones----->      
<a id="enlacePDF"  href="Instrucciones/instrucciones.pdf" class="cta">
  <span>Instrucciones</span>
  <svg width="13px" height="10px" viewBox="0 0 13 10">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg>
</a>
<!--- fin boton de instrucciones-----> 
<br>
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