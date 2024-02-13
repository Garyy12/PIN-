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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/minifav.png">
    <title>Sube tu Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../src/jquery.richtext.js"></script>
</head>
<body>



<?php include './php/header-usuario.php'; ?>

    <h1 class="fw-300 centrar-texto">Sube tu Blog</h1>
    

    <main class="contenedor seccion contenido-centrado">
        <h2 class="fw-300 centrar-texto">
   
      </div>
        </h2>

        <form class="contacto" action="scripts/crear_pagina.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Noticia</legend>
                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo" placeholder="Coloca un titulo">

                <label for="descripcion">Coloca la descripción de tu blog: </label>
                <textarea style ="height:10rem; resize: none; " name="descripcion" rows="2" cols="10" required></textarea><br>

                <label for="imagen">Sube tu imagen</label>
                <input class="boton boton-verde" type="file" name="imagen" placeholder="Sube tu imagen" required>

                <label for="contenido">Coloca el contenido de tu blog: </label>
                <textarea  name="contenido" rows="4" cols="50" required></textarea><br>
                
                <label for="autor">Nombre del autor: </label>
                <input type="text" name="autor" placeholder="Coloca el nombre del autor"><br>

        
                <label for="estado">Selecciona el estado: </label>
                <select name="estado" required>
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="CDMX">CDMX</option>
                    <option value="Puebla">Puebla</option>
                    <option value="Tijuana">Tijuana</option>
                    <option value="Tlaxcala">Tlaxcala</option>
                </select>


               
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