<?php
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename= Listado-Usuarios-k.xls");

require '../../php/conexion.php';
$conexion = $conectar;
?>
 <table>
                <thead>
                    <tr>
                        <th> Usuario </th>
                        <th> Nombre </th>
                        <th> Apellido paterno </th>
                        <th> Apellido materno </th>
                        <th> Email </th>
                        <th> Telefono </th>
						<th> Nivel </th>
                    </tr>
                </thead>
                <tbody>
               
                 
				<?php 
				$sql="SELECT *  from usuarios where admin = 0 and a_paterno like 'K%'";
				$result=mysqli_query($conexion,$sql);

				while($mostrar=mysqli_fetch_array($result)){
				 ?>
				<tr>
						<td> <?php echo $mostrar ['usuario']; ?> </td>
                        <td> <?php echo $mostrar ['nombre']; ?> </td>
                        <td> <?php echo $mostrar ['a_paterno']; ?> </td>
                        <td> <?php echo $mostrar ['a_materno']; ?></td>
                        <td>
                            <p class="status pending "><?php echo $mostrar ['email']; ?></p>
                        </td>
                        <td> <strong><?php echo $mostrar ['num_tel']; ?></strong> </td>
						<td> <strong><?php echo $mostrar ['id_nivel']; ?></strong> </td>
				</tr>
					<?php 
					}
					 ?>
                
                </tbody>
            </table>