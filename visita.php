<?php
if (!isset($_POST['id']) || !isset($_POST['activity'])){
	header("location:index.html");
	exit();
}
date_default_timezone_set("America/Monterrey");
$fecha=date("d/m/Y") . " " . date("h:i:s");
include_once "conn.php";
$idxd = $_POST['id'];
$activityxd = $_POST['activity'];
$sql = "INSERT INTO registro (idregistro, activity, Alumnos_idAlumnos,FechaRegistro) VALUES ('$idxd', '$activityxd', '$idxd', '$fecha')";
// use exec() because no results are returned
if ($conn->exec($sql)) {
	echo '<script>alert("BIENVENIDO")</script> ';
	echo "<script>location.href='index.html'</script>";
}else{echo "fallo";}
$conn = null;
?>
