<?php 
include_once 'conn.php';

$idA = $_POST["id"];
echo "$idA";
//$sqlv = "DELETE FROM registro WHERE idregistro = '$idA'";
/*if ( $conn->exec($sqlv) ){
    echo "Se eliminó el registro";
}*/
$sqlxd = "DELETE FROM alumnos WHERE idAlumnos = '$idA'"; 
   
    if ( $conn->exec($sqlxd) ){ 
        echo '<script>alert("ELIMINADO")</script>';  
        echo "<script>location.href='TeacherList.php'</script>";
    }else{ 
        echo "no se pudo eliminar.";
        }

?> 