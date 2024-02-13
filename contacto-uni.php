<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wwidth=device-width,user-scalable=no, initial-scale=1.0,maximun-scale=1.0,minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/minifav.png">
    <title>UD: UNIVERSIDAD INTERCULTURAL DIGITAL</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contacto-uni.css">
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
				<img style="width: 170px" src="img/logouniversidad.png" alt="Logotipo">
			</a>
			<h1>Universidad Intercultural Digital</h1>
		</div>
		<nav class="menu">
			<a href="beneficios-uni.php">Beneficios</a>
            <a href="carreras-uni.php">Carreras</a>
			
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
			<a href="">Menú </a>
			<a href="php/signup.php">Registrate</a>
			<a href="noticias.php">Carreras</a>
			<a href="beneficios.php">Beneficios</a>
		
		</nav>
		
	</div>
</div>

<body>

<br><br><br><br><br>
<h2 class="centered-text">UD: UNIVERSIDAD INTERCULTURAL DIGITAL</h2>

<div class="contact_form">
<div class="formulario">			
<h1>Formulario de contacto</h1>


            <form action="submeter-formulario.php" method="post">				

            <form method="POST" name= "form-work"action="contacto-guardar.php" class="form_contact">
        
                        
                            <label for="nombre" class="colocar_nombre">Nombre
                                <span class="obligatorio">*</span>
                            </label>
                                <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre">
                        
                            <label for="apellidos" class="colocar_apellidos">Apellidos
                                <span class="obligatorio">*</span>
                            </label>
                                <input type="apellido" name="introducir_apellido" id="apellido" required="obligatorio" placeholder="Escribe tus Apellidos">
                        
                            <label for="estado" class="colocar_estado">Estado
                            </label> <select name="estado" id="phone">
                                <option value="no">Seleccione el estado de donde es..</option>
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
                    
                        
                            <label for="correo" class="colocar_correo">Correo
                            </label>
                                <input type="correo" name="introducir_correo" id="correo" placeholder="Escribe tu correo">
                        
                            <label for="comunidad" class="colocar_comunidad">A que grupo Indigena perteneces
                                <span class="obligatorio">*</span>
                            </label>
                                <input type="text" name="introducir_comunidad" id="comunidad" required="obligatorio" placeholder="Escribe tu comunidad">
                        
                                <label for="telefono" class="colocar_telefono" >Telefono
                                <span class="obligatorio">*</span>
                            </label>
                                <input type="text" name="introducir_telefono" id="telefono" required="obligatorio" placeholder="Escribe tu telefono">
                        
                            <label for="mensaje" class="colocar_mensaje">Mensaje
                                <span class="obligatorio">*</span>
                            </label>                     
                                 <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu comentario..."></textarea> 
                             								
                    
                        <button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>

                        <p class="aviso">
                            <span class="obligatorio"> * </span>los campos son obligatorios.
                        </p>					
                
            </form>
</div>	
</div>

</body>
<br>

<footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a class="xd" href="#">Quiénes somos</a>
                <a clas= "xd"href="contacto.php">Contacto</a>
            </nav>
            <p class="nuevo-nombre">Todos los Derechos Reservados 2023 &copy; </p>
        </div>
    </footer>


</html>
