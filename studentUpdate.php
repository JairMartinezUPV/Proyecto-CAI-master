<?php
if(!isset($_POST["id"]))exit();
$id = $_POST["id"];
include_once "conn.php";include_once "conn2.php";

$sentencia = $conn->prepare("SELECT * FROM alumnos WHERE idAlumnos = ?;");
$sentencia->execute([$id]);
$alumnos = $sentencia->fetch(PDO::FETCH_OBJ);
if($alumnos == FALSE){
    echo "No existe ninguna persona con ese id";
    exit();
}

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
			<li><a href="sesionAdmin.php" class="black-text" title="Log In"><i class="material-icons right">account_circle</i>Back</a></li>
		</ul>
	</div>
</nav>

	<ul class="sidenav" id="mobile">
		<li><a href="sesionAdmin.php" class="black-text" title="Log In"><i class="material-icons right">account_circle</i>Back</a></li>
	</ul>

<!--Form-->
<br>
<header class="container col s12 m8 l6 offset-l3 offset-m2">
	<div class="row ">
		<div class="container col s12 m8 l6 offset-l3 offset-m2">
			<div class="card grey lighten-2">
				<div class="card-content black-text">
					<span class="card-title center">Update student</span>
					<form method="post" action="studentUp.php">
                    <input type="hidden" class="form-control" name="idAlumno" value="<?php echo $alumnos->idAlumnos?>">
						<div class="row">
							<div class="input-field col s12 m12 l12">
								<input placeholder="Enter the student name" id="user" required type="text" class="validate" name="name" value="<?php echo $alumnos->nombre?>">
								<label for="user">Enter the student name</label>
							</div>
							<div class="input-field col s12 m12 l12">
								<input placeholder="Enter the student ID" id="id" required type="text" class="validate" name="id" value="<?php echo $alumnos->idAlumnos?>">
								<label for="user">Enter the student ID</label>
							</div>
							<div class="input-field col s12 m12 l12">
								<select name="carreer">
									<option value="<?php echo $alumnos->carrera?>" disabled selected>Carrera actual: <?php echo $alumnos->carrera?></option>
									<option value="ITI">ITI</option>
									<option value="ISA">ISA</option>
									<option value="ITM">ITM</option>																<option value="PyMES">PyMES</option>
									<option value="IM">IM</option>
								</select>
								<label>Select the student career</label>
							</div>
							<div class="input-field col s12 m12 l12">
								<select name="group">
									<option value="">Grupo actual: <?php echo $alumnos->Grupo_idGrupo?></option>
									<?php
									$query = $mysqli -> query ("SELECT idGrupo FROM grupo");
									while ($valores = mysqli_fetch_array($query)) {
										echo '<option value="'.$valores[idGrupo].'">'.$valores[idGrupo].'</option>';
									}
									?>
								</select>
								<label>Select the student group</label>
							</div>
							<div class="center">
								<button class="btn waves-effect waves-light grey" type="submit" name="submit" title="Submit">Submit
									<i class="material-icons right">send</i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</header>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src = "./assets/jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="./assets/js/bin/materialize.min.js"></script>
<script type="text/javascript" src="./assets/jquery/plugins.js"></script>
</body>
</html>
