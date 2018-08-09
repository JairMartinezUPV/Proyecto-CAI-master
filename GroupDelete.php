<?php 
include_once 'conn.php';
//SET FOREIGN_KEY_CHECKS=0;

$id = $_POST["id"]; 
$sqlA = "DELETE FROM alumnos WHERE Grupo_idGrupo = $id ";
//$sqlR = "DELETE FROM registro WHERE (SELECT Grupo_idGrupo = $id FROM alumnos)";
$sql = "DELETE FROM grupo WHERE idGrupo = '$id'";

if ($conn->exec($sql) ){ 
	echo "SI SE PUDO";
	echo '<script>alert("ELIMINADO")</script>';  
	echo "<script>location.href='TeacherList.php'</script>";
}else{
	echo "NO SE PUDO";
}

//<SET FOREIGN_KEY_CHECKS=1;
?>0