<?php
include_once "conn2.php";
$query = "SELECT * FROM grupo WHERE Teacher_idTeacher = '$idT'";
$result = $mysqli -> query($query);
$row = mysqli_fetch_array($result);
$idG = $row['idGrupo'];
?>