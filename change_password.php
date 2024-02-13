<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="img/minifav.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type= "text/css" href ="../css/style.css">
    <link rel="stylesheet" type= "text/css" href ="../css/styles.css">
    <title>Login</title>

</head>
<?php include './php/header.php'; ?>

<body>
  <div class="barra">
    <div class="mensaje"></div>
  </div>

<div class="contenedor seccion-login">
  <div class="login-box">
    <h2>Recuperación de contraseña</h2>
    <form action="scripts/change_password.php" method="post">
      <div class="user-box">
          
        <input type="password" name="new_password" placeholder="Nueva contraseña" required="">
        <input type="hidden" name="usuario" value="<?php echo $_GET['usuario']; ?>">
      </div>
  
      
      <div class="button-container">
          
      <input id="inicio" type="submit" value= "Recuperar contraseña" >
          
        
      </div>
      
   
    </form>
   
      
  </div>
 </div>
</body>
</html>
