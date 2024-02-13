
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
       <!-- Agrega el enlace a Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   
</head>
<?php include './php/header.php'; ?>



<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
    <label for="btn-menu"> &#10005; </label>
		<nav>
			<a href="#">Iniciar sesión</a>
			<a href="#">Blog</a>
			<a href="#">Noticias</a>
			<a href="#">Facebook</a>
			<a href="#">Youtube</a>
			<a href="#">Instagram</a>
		</nav>
		
	</div>
</div>

<body>
    
   
  </div>


        <div id="wrapper" class="container">
  
                
                 <center>
                     <br>

                    <h1>Ingresa los siguientes datos</h1><hr>
                        <form  method="POST" name="form-work" action="afiliado-guardar.php">
                    
                                <fieldset>
                                
                                  <div class="form-group">
                                    <div class="col-md-6">
                                      <label class="control-label" for="nome">Nombre</label>
                                      <input name="nombre" class="form-control" placeholder="Tu nombre" type="text" required>
                                      </div>
                                    </div>
                          
                                  
                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="email">Apellido Paterno</label>
                                        <input name="a_paterno" class="form-control" placeholder="Apellido Paterno" type="text" required>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="email">Apellido Materno</label>
                                        <input name="a_materno" class="form-control" placeholder="Apellido Materno" type="text" required>
                                      </div>
                                    </div>
                          

                                    
                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="surname">Direccion</label>
                                        <input name="direccion" class="form-control" placeholder="Direccion" type="text" required>
                                      </div>
                                    </div>
                          

                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="surname">Profesion</label>
                                        <input name="profesion" class="form-control" placeholder="Escribe aqui tu profesion" type="text" required>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="surname">Cuentanos sobre ti</label>
                                        <textarea name="descrip" rows="4" cols="50" required></textarea><br>
                                      </div>
                                    </div>


                                    
                                    
                          
                                   
                                  
                                    <div class="form-group">
                                      <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block info">Guardar</button>
                                         
                                        <a href="../php/confirmar-registro.php">
                                      </div>
                                    </div>     
                                </fieldset> 
                              </form>
                 </center>
              </div>
    




</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</html>