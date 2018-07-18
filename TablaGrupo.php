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
			<div class="container centered col-lg-4 col-offset-6">
				<a class="navbar-brand" href="#">Centro de Autoaprendizaje de Idiomas</a>
			</div>
			<a class="btn btn-primary" href="SesionMaestro.php">Regresar</a>
		</div>
	</nav>
	<!--Tabla de grupos y alumnos-->
	<!--Aqui se crea la conexion con la base datos-->
<?php 

	$conexion=mysqli_connect('localhost','root','','mydb');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Grupo</title>
</head>
<body>

<br>
	<!--Se crea la tabla con los datos que contendra-->
	<table border="1" >
		<tr>
			<td>idGrupo</td>
			<td>nivel</td>
			<td>Teacher_idTeacher</td>
			<td>Ver Grupo</td>

		</tr>

		<!--Se seleccionan los datos de la tabla grupos-->
		<?php 
		$sql="SELECT * from grupo";
		$sqli="SELECT Grupo_idGrupoG * from alumnos";
		$result=mysqli_query($conexion,$sql);

		#Mientras mostrar sea igual a la fila que se obtuvo mediante el query de result
		#se mandan a llamar los datos de las filas
		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['idGrupo'] ?></td>
			<td><?php echo $mostrar['nivel'] ?></td>
			<td><?php echo $mostrar['Teacher_idTeacher'] ?></td>
			<td><a class="btn btn-primary" href="tablaAlumnos.php">Ver Grupo</a></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
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
