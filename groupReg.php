<?php
if (!isset($_POST['lvl']) || !isset($_POST['TeaID'])) {
	header('location:teacher.html');
	exit();
}
include_once "conn.php";
$GLVLxd = $_POST["lvl"];
$GTEAxd = $_POST["TeaID"];
$sql = "INSERT INTO grupo(nivel, Teacher_idTeacher)
VALUES ('$GLVLxd', '$GTEAxd')";
    // use exec() because no results are returned
$conn->exec($sql);
$conn = null;


echo '<script>alert("REGISTRO HECHO")</script>';
echo "<script>location.href='group.php'</script>";
?>