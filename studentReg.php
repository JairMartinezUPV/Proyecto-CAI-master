<?php
if (!isset($_POST['name']) || !isset($_POST['id']) || !isset($_POST['carreer']) || !isset($_POST['group'])) {
	header('location:student.php');
	exit();
}
include_once "conn.php";
$namexd = $_POST["name"];
$idxd = $_POST["id"];
$emailxd = $idxd . "@upv.edu.mx";
$carrxd = $_POST["carreer"];
$groupxd = $_POST["group"];
$sql = "INSERT INTO alumnos(idAlumnos, nombre, email, carrera, Grupo_idGrupo)
VALUES ('$idxd', '$namexd', '$emailxd', '$carrxd', '$groupxd')";
if ($conn->exec($sql)) {
	echo "registro hecho";
}else{echo "fallo";}
$conn = null;;

echo '<script>alert("REGISTRO HECHO")</script>';
echo "<script>location.href='student.php'</script>";
?>