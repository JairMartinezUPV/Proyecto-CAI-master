<?php 
include_once 'conn.php';

$idT = $_POST["id"];
$sqlxd = "DELETE FROM teacher WHERE idTeacher = '$idT'"; 

    if ($conn->exec($sqlxd)) { 
        echo '<script>alert("ELIMINADO")</script> ';
        echo "<script>location.href='TeacherList.php'</script>";
    }else{
        echo "No se actualizó.";
    }


?> 