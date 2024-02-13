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
    <link rel="icon" href="imagenes/favicon.ico">
    <title>Listado de afiliados</title>
    <link rel="stylesheet" type= "text/css" href ="../css/style3.css">
	
	
    
	
</head>
<body>
	

	<!--Prueba de tabla -->
	<main class="table">
        <section class="table__header">
            <h1>Afiliados</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="../img/icon-search.svg" alt="">
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <!--<a href="reporte-afiliados.php"><label id="toPDF">PDF <img src="images/pdf.png" alt=""></label></a> -->
                    <a href="excel-afiliados.php"><label id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label></a>


                    <label><a href="listado-letras-af/a.php">A <a href="listado-letras-af/b.php">B</a></a></label>
                    <label><a href="listado-letras-af/c.php">C <a href="listado-letras-af/d.php">D</a></a></label>
                    <label><a href="listado-letras-af/e.php">E <a href="listado-letras-af/f.php">F</a></a></label>
                    <label><a href="listado-letras-af/g.php">G <a href="listado-letras-af/h.php">H</a></a></label>
                    <label><a href="listado-letras-af/i.php">I <a href="listado-letras-af/j.php">J</a></a></label>
                    <label><a href="listado-letras-af/k.php">K <a href="listado-letras-af/l.php">L</a></a></label>
                    <label><a href="listado-letras-af/m.php">M <a href="listado-letras-af/n.php">N</a></a></label>
                    <label><a href="listado-letras-af/ñ.php">Ñ <a href="listado-letras-af/o.php">O</a></a></label>
                    <label><a href="listado-letras-af/p.php">P <a href="listado-letras-af/q.php">Q</a></a></label>
                    <label><a href="listado-letras-af/r.php">R <a href="listado-letras-af/s.php">S</a></a></label>
                    <label><a href="listado-letras-af/t.php">T <a href="listado-letras-af/u.php">U</a></a></label>
                    <label><a href="listado-letras-af/v.php">V <a href="listado-letras-af/w.php">W</a></a></label>
                    <label><a href="listado-letras-af/x.php">X <a href="listado-letras-af/y.php">Y</a></a></label>
                    <label><a href="listado-letras-af/z.php">Z </a></label>


                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Nombre <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Apellido paterno <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Apellido materno <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Direccion <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Profesión <span class="icon-arrow">&UpArrow;</span></th>
						<th> Descripción <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
               
                 
				<?php 
				$sql="SELECT *  from afiliados";
				$result=mysqli_query($conexion,$sql);

				while($mostrar=mysqli_fetch_array($result)){
				 ?>
				<tr>
						
                        <td><img src="../img/profile3.svg" alt=""> <?php echo $mostrar ['nombre']; ?> </td>
                        <td> <?php echo $mostrar ['a_paterno']; ?> </td>
                        <td> <?php echo $mostrar ['a_materno']; ?></td>
                        <td>
                            <p class="status pending "><?php echo $mostrar ['direccion']; ?></p>
                        </td>
                        <td> <strong><?php echo $mostrar ['profesion']; ?></strong> </td>
						<td> <strong><?php echo $mostrar ['descrip']; ?></strong> </td>
		
		
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