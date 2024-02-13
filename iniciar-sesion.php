<?php
	require 'scripts/funciones.php';
	$usuario = $_POST['txtUsuario'];
	$clave = $_POST['txtClave'];
	
	
	//$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
	conectar();
	if( validarLogin($usuario, $clave) ) {
	echo "valida";
	// Accedemos al sistema
		if(esAdmin()){
		   
		    header('Location: admin');
		    echo "es admin";
		}
		elseif(presidente()){

			header('location: presidente/presidente.php');
		}
		elseif(lestado()){

			header('location: lider-estado/lestado.php');
		}
		elseif(lmunicipio()){

			header('location: lider-municipio/lmunicipio.php');
		}
		elseif(llocalidad()){

			header('location: lider-localidad/llocalidad.php');
		}
		    
		else{
		 header('Location: panelUsuario');
		}
	} 
	
	else {
	// Sino volvemos al formulario inicial
?>
	<script>
	alert('Los datos ingresados son incorrectos.')
	location.href = "index.php";
	</script>
<?php
	desconectar();
}
?>