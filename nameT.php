<?php
include_once "conn2.php";
$query = "SELECT * FROM teacher WHERE idTeacher = '$idT'";
$result = $mysqli -> query($query);
$row = mysqli_fetch_array($result);
$nameT = $row['nombre'];
?>