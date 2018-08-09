<?php
if (!isset($_POST['idTeacher']) || !isset($_POST['user']) || !isset($_POST['pwd'])) {
	header('location:teacherList.php');
	exit();
}
include_once "conn.php";
$IdTeacher = $_POST['idTeacher'];
$Nombre = $_POST['user'];
$Contrasena = $_POST['pwd'];

$sentencia = $conn->prepare("UPDATE teacher SET nombre = ?, contrasena = ? WHERE idTeacher = ?;");
$resultado = $sentencia->execute([$Nombre, $Contrasena, $IdTeacher]);

echo $resultado;
if ($resultado == TRUE) {
	echo '<script>alert("ACTUALIZADO")</script>';
echo "<script>location.href='teacherList.php'</script>";
}else{echo "fallo";}
$conn = null;


?>