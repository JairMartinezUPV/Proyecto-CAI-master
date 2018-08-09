<?php
include 'Plantilla.php';
include_once "conn2.php";
$idG = $_POST["id"];
$query = "SELECT * FROM alumnos WHERE Grupo_idGrupo = '$idG'";
$resultado = $mysqli->query($query);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(232,300,232);
$pdf->SetFont('Arial','B',12);
$pdf->SetX(30);
$pdf->SetY(40);
$pdf->Cell(70,6,'Nombre',1,0,'C',1);
$pdf->Cell(20,6,'ID',1,0,'C',1);
$pdf->Cell(70,6,'Correo',1,1,'C',1);

$pdf->SetFont('Arial','',10);

while($row = $resultado->fetch_assoc())
{
	$pdf->Cell(70,6,utf8_decode($row['nombre']),1,0,'C');
	$pdf->Cell(20,6,$row['idAlumnos'],1,0,'C');
	$pdf->Cell(70,6,utf8_decode($row['email']),1,1,'C');
}

$pdf->Output();  
?>