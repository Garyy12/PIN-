<?php
 require 'php/conexion.php';
  
 
 $nombre  = $_POST['nombre'];
 $apellidos  = $_POST['apellidos'];
 $estado  = $_POST['estado'];
 $comunidad = $_POST['comunidad'];
 $motivo = $_POST['motivo'];
 $telefono  = $_POST['telefono'];
 $correo= $_POST['correo'];


$insertar = "INSERT INTO contactos VALUES ('','$nombre','$apellidos','$estado', '$comunidad', '$motivo', '$telefono', '$correo') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = 'confirmacion-contacto.php';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = 'contacto.php';
    </script>";
}

