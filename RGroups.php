<?php
include 'Plantilla.php';
include_once "conn2.php";
$idT = $_POST["id"];
$query = "SELECT * FROM grupo WHERE Teacher_idTeacher = '$idT'";
$resultado = $mysqli->query($query);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(232,300,232);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(120,10, 'Reporte de grupos',0,0,'C');
$pdf->SetX(30);
$pdf->SetY(40);
$pdf->Cell(20,6,'ID',1,0,'C',1);
$pdf->Cell(20,6,'ID',1,0,'C',1);

$pdf->SetFont('Arial','',10);

while($row = $resultado->fetch_assoc())
{
	$pdf->Cell(70,6,$row['idGrupo'],1,1,'C');
	$pdf->Cell(20,6,$row['nivel'],1,1,'C');
}
$pdf->Output();  
?>