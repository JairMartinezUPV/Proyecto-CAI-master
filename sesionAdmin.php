<?php
session_start();
if (isset($_SESSION["user"])) {
	$user = $_SESSION["user"];
}else{
	header("Location:loginAdmin.html");
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
			<li><a href="logout.php" class="black-text" title="Log out"><i class="material-icons right">account_circle</i>Log Out</a></li>
		</ul>
	</div>
</nav>

<ul class="sidenav" id="mobile">
	<li><a href="loginAdmin.html" class="black-text" title="Log In"><i class="material-icons right">account_circle</i>Log Out</a></li>
</ul>

<!--Form-->
<br><br>
<header class="container col s12 m8 l6 offset-l3 offset-m2">
	<div class="card grey lighten-2">
		<div class="card-content black-text">
			<span class="card-title center">¡Welcome, <?php echo $user?>!</span>
		</div>
	</div>
</header>
<div class="container">
	<div class="card grey lighten-2">
		<div class="card-content black-text">
			<span class="card-title center">Create new teachers, groups and students registers</span>
		</div>
		<div class="row">
			<div class="col s12 m6 l4">
				<div class="card small grey lighten-1">
					<div class="card-image">
						<img src="#">
						<span class="card-title">Teacher</span>
					</div>
					<div class="card-content">
						<p>Register a new teacher</p>
					</div>
					<div class="card-action center">
						<a href="teacher.html" class="btn waves-effect waves-light grey" title="Teacher">Continue
							<i class="material-icons right">send</i>
						</a>
					</div>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card small grey lighten-1">
					<div class="card-image">
						<img src="#">
						<span class="card-title">Group</span>
					</div>
					<div class="card-content">
						<p>Register a new group</p>
					</div>
					<div class="card-action center">
						<a href="group.php" class="btn waves-effect waves-light grey" title="Group">Continue
							<i class="material-icons right">send</i>
						</a>
					</div>
				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="card small grey lighten-1">
					<div class="card-image">
						<img src="#">
						<span class="card-title">Student</span>
					</div>
					<div class="card-content">
						<p>Register a new student</p>
					</div>
					<div class="card-action center">
						<a href="student.php" class="btn waves-effect waves-light grey" title="Student">Continue
							<i class="material-icons right">send</i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div><div class="hide-on-med-and-down"></div>
</div>
<div class="container">
	<div class="card grey lighten-2">
		<div class="card-content black-text">
			<span class="card-title center">Update/Delete existent teachers, groups and students information</span>
		</div>
		<div class="row">
			<div class="col s12 m6 l4 offset-l4">
				<div class="card small grey lighten-1">
					<div class="card-image">
						<img src="#"">
						<span class="card-title">Existent registers</span>
					</div>
					<div class="card-content">
						<p>Update/Delete information</p>
					</div>
					<div class="card-action center">
						<a href="teacherList.php" class="btn waves-effect waves-light grey" title="Teachers">Continue
							<i class="material-icons right">send</i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div><div class="hide-on-med-and-down"></div>
</div>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src = "./assets/jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="./assets/js/bin/materialize.min.js"></script>
<script type="text/javascript" src="./assets/jquery/plugins.js"></script>
</body>
</html>

