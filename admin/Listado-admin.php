<?php 
require '../php/conexion.php';
$conexion = $conectar;


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="icon" type="image/png" href="../img/minifav.png">
    <title>Listado de Administradores</title>
    <link rel="stylesheet" type= "text/css" href ="../css/style3.css">
	
	
    
	
</head>
<body>
	

	<!--Prueba de tabla -->

	<main class="table">
        <section class="table__header">
            <h1>Administradores</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="../img/icon-search.svg" alt="">
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <!-- <a href="reporte-admin.php"><label id="toPDF">PDF <img src="images/pdf.png" alt=""></label></a> -->


                    <label><a href="listado-letras-ad/a.php">A <a href="listado-letras-ad/b.php">B</a></a></label>
                    <label><a href="listado-letras-ad/c.php">C <a href="listado-letras-ad/d.php">D</a></a></label>
                    <label><a href="listado-letras-ad/e.php">E <a href="listado-letras-ad/f.php">F</a></a></label>
                    <label><a href="listado-letras-ad/g.php">G <a href="listado-letras-ad/h.php">H</a></a></label>
                    <label><a href="listado-letras-ad/i.php">I <a href="listado-letras-ad/j.php">J</a></a></label>
                    <label><a href="listado-letras-ad/k.php">K <a href="listado-letras-ad/l.php">L</a></a></label>
                    <label><a href="listado-letras-ad/m.php">M <a href="listado-letras-ad/n.php">N</a></a></label>
                    <label><a href="listado-letras-ad/ñ.php">Ñ <a href="listado-letras-ad/o.php">O</a></a></label>
                    <label><a href="listado-letras-ad/p.php">P <a href="listado-letras-ad/q.php">Q</a></a></label>
                    <label><a href="listado-letras-ad/r.php">R <a href="listado-letras-ad/s.php">S</a></a></label>
                    <label><a href="listado-letras-ad/t.php">T <a href="listado-letras-ad/u.php">U</a></a></label>
                    <label><a href="listado-letras-ad/v.php">V <a href="listado-letras-ad/w.php">W</a></a></label>
                    <label><a href="listado-letras-ad/x.php">X <a href="listado-letras-ad/y.php">Y</a></a></label>
                    <label><a href="listado-letras-ad/z.php">Z </a></label>


                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Usuario <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Nombre <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Apellido paterno <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Apellido materno <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Email <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Telefono <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
               
                 
				<?php 
				$sql="SELECT *  from usuarios where admin = 1 ";
				$result=mysqli_query($conexion,$sql);

				while($mostrar=mysqli_fetch_array($result)){
				 ?>
				<tr>
						<td> <?php echo $mostrar ['usuario']; ?> </td>
                        <td><img src="../img/profile3.svg" alt=""> <?php echo $mostrar ['nombre']; ?> </td>
                        <td> <?php echo $mostrar ['a_paterno']; ?> </td>
                        <td> <?php echo $mostrar ['a_materno']; ?></td>
                        <td>
                            <p class="status shipped"><?php echo $mostrar ['email']; ?></p>
                        </td>
                        <td > <strong><?php echo $mostrar ['num_tel']; ?></strong> </td>
		
		
				</tr>
					<?php 
					}
					 ?>
                
                </tbody>
            </table>
        </section>
    </main>
	<!--Aquí termina la prueba de tabla -->

	<section>
	<div class="btn ">
            <a href="index.php"  type="button"  >Regresar al inicio</a>
             
        </div>
	</section>

        
              
          



<script src="../scripts/script.js">	</script>
</body>
</html>