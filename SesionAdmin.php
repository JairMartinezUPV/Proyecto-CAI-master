<?php
session_start();
if (isset($_SESSION["user"])) {
	$user = $_SESSION["user"];
}else{
	header("Location:login-page.html");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Landing Page - CAI</title>

	<!-- Bootstrap core CSS -->
	<link href="./assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="./assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<!-- Custom styles for this template -->
	<link href="./assets/css/landing-page.min.css" rel="stylesheet">

</head>
<body>
	<!-- Navigation -->
	<nav class="navbar navbar-light bg-light static-top">
		<div class="container">
			<a class="navbar-brand" href="#">¡Bienvenido, <?php echo $user?>!</a>
			<a class="navbar-brand" href="#">Centro de Autoaprendizaje de Idiomas</a>
			<a href="logout.php">Log out</a>
		</div>
	</nav>
	
	<a class="btn btn-primary" href="Teacher.html">Registrar teacher</a>
	<a class="btn btn-primary" href="Grupos.html">Crear grupo</a>	
	<a class="btn btn-primary" href="CAI2.html">Registrar Alumno</a>


	<!-- Footer -->
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<footer class="footer bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 h-100 text-center text-lg-left my-auto">
					<ul class="list-inline mb-2">
						<li class="list-inline-item">
							<a href="#">About</a>
						</li>
						<li class="list-inline-item">&sdot;</li>
						<li class="list-inline-item">
							<a href="#">Contact</a>
						</li>
						<li class="list-inline-item">&sdot;</li>
						<li class="list-inline-item">
							<a href="#">Terms of Use</a>
						</li>
						<li class="list-inline-item">&sdot;</li>
						<li class="list-inline-item">
							<a href="#">Privacy Policy</a>
						</li>
					</ul>
					<p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2018. All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 h-100 text-center text-lg-right my-auto">
					<ul class="list-inline mb-0">
						<li class="list-inline-item mr-3">
							<a href="#">
								<i class="fa fa-facebook fa-2x fa-fw"></i>
							</a>
						</li>
						<li class="list-inline-item mr-3">
							<a href="#">
								<i class="fa fa-twitter fa-2x fa-fw"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#">
								<i class="fa fa-instagram fa-2x fa-fw"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

</body>

</html>