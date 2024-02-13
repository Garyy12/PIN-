<?php
	include 'plantilla.php';
	require '../php/conexion.php';
    $conexion = $conectar;
	
	$usuarios = "SELECT *  from usuarios where admin = 0 ";
	$resultado=mysqli_query($conexion,$usuarios);
	
	
	$pdf = new usuarios('L');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(55,6,'USUARIO',1,0,'C',1);
	$pdf->Cell(30,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(45,6,'APELLIDO PATERNO',1,0,'C',1);
	$pdf->Cell(45,6,'APELLIDO MATERNO',1,0,'C',1);
	$pdf->Cell(60,6,'EMAIL',1,0,'C',1);
	$pdf->Cell(25,6,'TELEFONO',1,0,'C',1);
	$pdf->Cell(15,6,'NIVEL',1,1,'C',1);
	
	$pdf->SetFont('Arial','',9);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->cell(55,6,utf8_decode($row['usuario']),1,0,'C');
		$pdf->Cell(30,6,$row['nombre'],1,0,'C');
		$pdf->Cell(45,6,utf8_decode($row['a_paterno']),1,0,'C');
		$pdf->Cell(45,6,utf8_decode($row['a_materno']),1,0,'C');
		$pdf->Cell(60,6,utf8_decode($row['email']),1,0,'C');
		$pdf->Cell(25,6,utf8_decode($row['num_tel']),1,0,'C');
		$pdf->Cell(15,6,utf8_decode($row['id_nivel']),1,1,'C');
	}
	$pdf->Output();
?>