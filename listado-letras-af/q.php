<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= Listado-Afiliados-q.xls");

require '../../php/conexion.php';
$conexion = $conectar;
?>
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
				$sql="SELECT *  from afiliados where a_paterno like 'Q%'";
				$result=mysqli_query($conexion,$sql);

				while($mostrar=mysqli_fetch_array($result)){
				 ?>
				<tr>
						
                        <td> <?php echo $mostrar ['nombre']; ?> </td>
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