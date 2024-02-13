<?php
  // Solución: Cerrar la sesión, limpiar variables y redirigir a login.php
  session_start();
  session_unset();
  session_destroy();
  header('Location: login.php');
  exit();
?>
