<?php
if (!isset($_POST['user']) || !isset($_POST['pwd'])) {
	header('location:teacher.html');
	exit();
}
include_once "conn.php";
$userxd = $_POST['user'];
$pwdxd = $_POST['pwd'];
$sql = "INSERT INTO teacher(nombre, contrasena) VALUES('$userxd','$pwdxd')";
if ($conn->exec($sql)) {
	echo "registro hecho";
}else{echo "fallo";}
$conn = null;;

echo '<script>alert("REGISTRO HECHO")</script>';
echo "<script>location.href='teacher.html'</script>";
?>