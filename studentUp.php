<?php
if (!isset($_POST['name']) || !isset($_POST['id']) || !isset($_POST['carreer']) || !isset($_POST['group'])) {
	header('location:teacherList.php');
	exit();
}
include_once "conn.php";
$Name = $_POST['name'];
$Id = $_POST['id'];
$IdAC = $_POST['idAlumno'];
$Carreer = $_POST['carreer'];
$Group = $_POST['group'];
$emailxd = $Id . "@upv.edu.mx";

$sentencia = $conn->prepare("UPDATE alumnos SET idAlumnos = ?, nombre = ?, email = ?, carrera = ?, Grupo_idGrupo = ? WHERE idAlumnos = ?;");
$resultado = $sentencia->execute([$Id, $Name, $emailxd, $Carreer, $Group, $IdAC]);

echo $resultado;
if ($resultado == TRUE) {
	echo '<script>alert("ACTUALIZADO")</script>';
	echo "<script>location.href='teacherList.php'</script>";
}else{echo "fallo";}
$conn = null;
?>