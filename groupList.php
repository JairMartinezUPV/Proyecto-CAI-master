<?php
$idT = $_POST["id"];
include_once "nameT.php";
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
			<li><a href="teacherList.php" class="black-text" title="Log out"><i class="material-icons right">account_circle</i>Back</a></li>
		</ul>
	</div>
</nav>

<ul class="sidenav" id="mobile">
	<li><a href="teacherList.php" class="black-text" title="Log In"><i class="material-icons right">account_circle</i>Back</a></li>
</ul>

<!--Form-->
<br><br>
<header class="container col s12 m8 l6 offset-l3 offset-m2">
	<div class="card grey lighten-2">
		<div class="card-content black-text">
			<span class="card-title center"><?php echo $nameT?>´s Groups</span>
		</div>
	</div>
</header>
<div class="container">
	<div class="card grey lighten-2">
		<div class="row">
			<div class="col s12 m8 l10 offset-l1 offset-m2">
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Level</th>
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
							<form method="post" action="studentList.php">
							<button class="right btn waves-effect waves-light-blue blue" type="submit" name="id" value="'.$valores[$ID].'">Students</button>
							</form>
							</td>';
							echo '<td><a href="#!" class="right waves-effect waves-light-green btn green">Edit</a></td>';
							
							echo '<td>
							<form method="post" action="GroupDelete.php">
							<button class="right waves-effect waves-light-red btn red" type="submit" name="id" value="'.$valores[$ID].'">Delete</button>
							</form>
							</td>';
							
							echo "</tr>";
						}
						?>	
					</tbody>
				</table>
			</div>
			<div class="card-action right">
				<a href="RGroups.php" class="left waves-effect waves-light-green btn green">Download report<i class="material-icons right">file_copy</i></a>
			</div>
		</div>
	</div>
</div>

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

