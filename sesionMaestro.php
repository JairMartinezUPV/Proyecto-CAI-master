<?php
session_start();
if (isset($_SESSION["user"])) {
	$user = $_SESSION["user"];
	include "idT.php";
	include "idG.php";
}else{
	header("Location:loginMaestro.html");
	exit();
}
include_once "conn2.php";
?>
<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="./assets/css/materialize.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<!-- Navigation -->
<nav>
	<div class="nav-wrapper grey lighten-2">
		<a href="index.html" class="brand-logo center" title="Universidad Politecnica de Victoria">
			<img src="./assets/img/LogoUPV.png" width="60" height="60">
		</a>
		<a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down">
			<li><a href="logout.php" class="black-text" title="Log out"><i class="material-icons right">account_circle</i>Log Out</a></li>
		</ul>
	</div>
</nav>

<ul class="sidenav" id="mobile">
	<li><a href="logout.php" class="black-text" title="Log In"><i class="material-icons right">account_circle</i>Log Out</a></li>
</ul>

<!--Form-->
<br><br>
<header class="container col s12 m8 l6 offset-l3 offset-m2">
	<div class="card grey lighten-2">
		<div class="card-content black-text">
			<span class="card-title center">¡Welcome, teacher <?php echo $user?>!</span>
		</div>
	</div>
</header>
<div class="container">
	<div class="card grey lighten-2">
		<div class="row">
			<div class="col s12 m6 l4 offset-l4 offset-m3">
				<div class="card small grey lighten-1">
					<div class="card-image">
						<img src="#	"">
						<span class="card-title">Groups</span>
					</div>
					<div class="card-content">
						<p>Here you can see your groups.</p>
					</div>
					<div class="card-action center">
						<a href="#modalGrupos" class="btn waves-effect waves-light grey modal-trigger" title="Groups">Open
							<i class="material-icons right">group</i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal Grupos -->
<div id="modalGrupos" class="modal">
	<div class="modal-content">
		<h4>Teacher Groups</h4>
		<table>
			<thead>
				<tr>
					<th>Group ID</th>
					<th>Group Level</th>
					<th>Group Students</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$ID = "idGrupo";
				$lvl = "nivel";
				$query = $mysqli -> query ("SELECT * FROM grupo WHERE Teacher_idTeacher = '$idT'");
				while ($valores = mysqli_fetch_array($query)) {
					echo "<tr>";
					echo '<td>'.$valores[$ID].'</td>';
					echo '<td>'.$valores[$lvl].'</td>';
					echo '<td>
					<form method="post" action="studentsGroup.php">
					<button class="btn waves-effect waves-light grey" type="submit" name="id" value="'.$valores[$ID].'">Open</button>
					</form>
					</td>';
					echo "</tr>";
				}
				?>	
			</tbody>
		</table>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close waves-effect waves-red btn red">Close<i class="material-icons right">cancel</i></a>
	</div>
</div>
<!--div id="modalStudents" class="modal">
	<div class="modal-content">
		<h4>Teacher Groups</h4>
		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>ID</th>
					<th>Carreer</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$ID = "idAlumnos";
				$name = "nombre";
				$carr = "carrera";
				$query = $mysqli -> query ("SELECT * FROM alumnos WHERE Grupo_idGrupo = '$idG'");
				while ($valores = mysqli_fetch_array($query)) {
					echo "<tr>";
					echo '<td>'.$valores[$ID].'</td>';
					echo '<td>'.$valores[$name].'</td>';
					echo '<td>'.$valores[$carr].'</td>';
					echo "</tr>";
				}
				?>	
			</tbody>
		</table>
	</div>
	<div class="modal-footer">
		<a href="#!" class="left waves-effect waves-green btn green">Download report<i class="material-icons right">file_copy</i></a>
		<a href="#!" class="modal-close waves-effect waves-red btn red">Close<i class="material-icons right">cancel</i></a>
	</div>
</div-->
<!--Footer-->
<footer class="page-footer grey lighten-1" style="position: absolute; right:  0; left: 0; bottom:0; ">
	<div class="container center black-text">
		Raul Alejandro Lopez Balleza, Jair Alberto Martinez Hernandez, Paola Guadalupe Herrera Quirozm, Jose Leonardo Amaya Escobedo
	</div>
</footer>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src = "./assets/jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="./assets/js/bin/materialize.min.js"></script>
<script>
	$(document).ready(function(){
		$(".modal").modal();
	});
</script>
<script type="text/javascript" src="./assets/jquery/plugins.js"></script>
</body>
</html>

