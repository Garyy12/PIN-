<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wwidth=device-width,user-scalable=no, initial-scale=1.0,maximun-scale=1.0,minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/minifav.png">
    <title>Supremo Consejo Indígena Nacional</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contacto.css">
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
				<img style="width: 170px" src="img/Logo-comunidad1.png" alt="Logotipo">
			</a>
			<h1>Plataforma Indígena Nacional</h1>
		</div>
		<nav class="menu">
			<a href="login.php">Iniciar sesion</a>
			
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
			<a href="noticias.php">Blog</a>
			<a href="beneficios.php">Beneficios</a>
		
		</nav>
		
	</div>
</div>

<body>
    
<br><br><br><br>
<section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACION<br>DE CONTACTO</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> comunidadesindigenas@gmail.com</p>
                <p><span class="fa fa-mobile"></span> </p>
            </section>
        </section>
        <form method="POST" name= "form-work"action="contacto-guardar.php" class="form_contact">
        
            <h2>Envia un mensaje</h2>
            <div class="user_info">
                
                <label for="names">Nombre Completo*</label>
                <input name="nombre" type="text"   placeholder="Nombre" id="names">

                <label for="names">Apellidos*</label>
                <input type="text" name="apellidos"  placeholder="Apellidos" id="names">

                <label for="phone">Estado *</label>
                            <select name="estado" id="phone">
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
                <br>

                <label for="email">Correo *</label>
                <input type="text" name="correo" placeholder="Correo"  id="email">

                <label for="email">A que grupo indigena perteneces *</label>
                <input type="text" name="comunidad" placeholder="Comunidad"  id="email">

                <label for="email">Telefono *</label>
                <input type="text" name="telefono"  placeholder="Telefono" id="email">

                <label for="mensaje">Mensaje *</label>
                <textarea name="motivo" id="motivo" placeholder="Motivo" ></textarea>

                <input type="submit" value="Enviar Mensaje" id="btnSend">
                <a href="confrimacion-contacto.php">
            </div>
        </form>

    </section>
    
</body>

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
