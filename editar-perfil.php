
<?php
  require './scripts/funciones.php';
  conectar();
 

  if(! haIniciadoSesion() )
  {
    header('Location: index.php');
  }

  $usuarios = getUsuarios();
  

  $sql = "SELECT  usuario, email, clave, nombre, a_paterno, a_materno, num_tel, id_nivel, foto, estado FROM usuarios WHERE usuario =   '{$_SESSION['usuario']}' ";
	
  $result=mysqli_query($conexion,$sql);

		 if ($result) {
			// Obtener los datos de la imagen
			$fila = mysqli_fetch_assoc($result);
			$imagen = $fila['foto'];

		
		} else {
			echo "Error en la consulta: " . mysqli_error($conexion);
		}
 
  desconectar();

?>   
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Editar Perfil</title>
<link rel="stylesheet" href ="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylescontacto.css">
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
				<img style="width: 92px" src="./img/4.1.png" alt="Logotipo">
			</a>
			<h1>Gobierno Del Supremo Consejo Indígena Nacional</h1>
		</div>
		<nav class="menu">
	  	<a href="panelUsuario.php">Home</a>
		
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
			<a href="panelUsuario.php">Home</a>
			<a href="editar-perfil.php">Perfil</a>
			<a href="chat.php">Asesoria Legal</a>
			<a href="mapaRep/index.php">Mapa Interactivo</a>
			
		</nav>
		
	</div>
</div>
<body>

    <br><br><br><br><br>
<!-- contenedor de imagen, nombre ect -->

<div class="container"><div class="main-body">
  <h2 class="text-center" style="font-size: 300%;">Edita tu perfil</h2>
<br>
  <div class="row justify-content-center align-items-center">
    <div class="col-lg-5">
      <div class="card">
        <div class="card-body">
          <div class="d-flex flex-column align-items-center text-center">
            <img src="<?php echo $imagen ?>" alt="Admin" class="rounded-circle p-1 bg-primary" width="140" height="140">
            <div class="mt-3">
              <h4><?= $_SESSION['usuario'] ?>.</h4>
              <p class="text-secondary mb-1">Full Stack Developer</p>
              <p class="text-muted font-size-sm">Ixtapaluca, Edo Mex.</p>
              <form action="guardar-foto.php" method="post" enctype="multipart/form-data">
                <label for="file-input" class="custom-upload-button">
                  Subir
                </label>
                <input id="file-input" class="custom-file-input" type="file" name="foto_perfil" accept="image/*" required>
                <br><br>
                <input class="btn btn-primary" type="submit" value="Guardar foto de perfil"> <br>
              </form>

</div>
</div>
<hr class="my-4">
<ul class="list-group list-group-flush">
<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">

</li>
</ul>
</div>
</div>
</div>

<!-- contenedor para agregar datos personales -->

<div class="col-lg-8">
<form  method="POST" name="form-work" action="guardar-editarperfil.php">
<br>
<div class="card">
<div class="card-body">
<div class="row mb-3">
<div class="col-sm-3">
<p><h4 class="mb-0">Nombre:</h4></p>
</div>
<div class="col-sm-9 text-secondary">
<input name="nombre" class="form-control" placeholder="" type="text" required>
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<p><h4 class="mb-0">Apellido Paterno:</h4></p>
</div>
<div class="col-sm-9 text-secondary">
<input name="a_paterno" class="form-control" placeholder="" type="text" required>
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<p><h4 class="mb-0">Apellido Materno:</h4></p>
</div>
<div class="col-sm-9 text-secondary">
<input name="a_materno" class="form-control" placeholder="" type="text" required>
</div>
</div>
<div class="row mb-3">
<div class="col-sm-3">
<p><h4 class="mb-0">Telefono:</h4></p>
</div>
<div class="col-sm-9 text-secondary">
<input name="num_tel" class="form-control" placeholder="ejemplo: 5512345678" type="text" required>
  <div class="info-icon" data-toggle="tooltip" data-placement="left" title="Llena los datos correspondientes a tu información">
    <i class="fas fa-info-circle"></i>
  </div>
</div>
</div>

<!-- contenedor de listas de estado -->
<div class="row mb-3">
<div class="col-sm-3">

<p><h4 class="mb-0">Estado:</h4></p>

</div>
<div class="col-sm-9 text-secondary">
<select name="estado">
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
  <br><br>

</div>
</div>
<div class="row">
<div class="col-sm-3"></div>

<!-- contenedor de boton para guardar datos -->
<div class="col-sm-9 text-secondary">
<button type="submit" class="btn btn-primary btn-lg btn-block info">Guardar</button>
<a href="../php/editar-perfil.php">
    <br><br><br>
</div>
</div>
</div>
</div>
</form>


<!-- contenedor de estatus este aun esta pendiente por si se queda
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<h5 class="d-flex align-items-center mb-3">Project Status</h5>
<p>Web Design</p>
<div class="progress mb-3" style="height: 5px">
<div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Website Markup</p>
<div class="progress mb-3" style="height: 5px">
<div class="progress-bar bg-danger" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>One Page</p>
<div class="progress mb-3" style="height: 5px">
<div class="progress-bar bg-success" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Mobile Template</p>
<div class="progress mb-3" style="height: 5px">
<div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Backend API</p>
<div class="progress" style="height: 5px">
<div class="progress-bar bg-info" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
 -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>

</body> 
<footer class="site-footer seccion">  
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="# ">Quiénes somosㅤㅤ</a>
                <a href="#">Contactoㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</a> 
            </nav>
            <p class="copyright">Todos los Derechos Reservados 2023 &copy; </p>
        </div>
    </footer>
</html>