<!--Footer-->
<footer class="page-footer grey lighten-1" style="position: absolute; right:  0; left: 0; bottom:0; ">
	<div class="container center black-text">
		Raul Alejandro Lopez Balleza, Jair Alberto Martinez Hernandez,, Jose Leonardo Amaya Escobedo
	</div>
</footer>

<?php
include_once "conn2.php";
$query = "SELECT * FROM teacher WHERE idTeacher = '$id'";
$result = $mysqli -> query($query);
$row = mysqli_fetch_array($result);
$nameT = $row['nombre'];
echo $nameT;
?>

