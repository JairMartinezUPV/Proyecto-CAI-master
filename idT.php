<?php
include_once "conn2.php";
$query = "SELECT * FROM teacher WHERE nombre = '$user'";
$result = $mysqli -> query($query);
$row = mysqli_fetch_array($result);
$idT = $row['idTeacher'];
?>