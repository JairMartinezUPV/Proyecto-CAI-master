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

<br>
	<!--Se crea la tabla con los datos que contendra-->
		<div class="footer text-center">

			<table class="table table-hover">
				<tr>
					<td>Matricula</td>
					<td>nombre</td>
					<td>email</td>
					<td>carrera</td>	
                    <td>Grupo</td>	
                    <td>Actividad</td>
				</tr>

				<!--Se seleccionan los datos de la tabla alumnos-->
				<?php 
					$sql="SELECT * from registro" ;
					$result=mysqli_query($conexion,$sql);
					$sqli="SELECT * from alumnos";
					$resulti=mysqli_query($conexion,$sqli);


					#Mientras mostrar sea igual a la fila que se obtuvo mediante el query de result
					#se mandan a llamar los datos de las filas
					while($mostrar=mysqli_fetch_array($result)){
						while ($mostrar=mysqli_fetch_array($resulti)) {
				?>

					<tr>
						<td><?php echo $mostrar['idAlumnos'] ?></td>
						<td><?php echo $mostrar['nombre'] ?></td>
						<td><?php echo $mostrar['email'] ?></td>
						<td><?php echo $mostrar['carrera'] ?></td>
                        <td><?php echo $mostrar['Grupo_idGrupo'] ?></td>
                        <td><?php echo $mostrar['activity'] ?></td>
                    </tr>
				<?php 
				}
			}
				?>
			</table>
			<div class="footer">
			<a class="btn btn-primary" href="SesionMaestro.php">Grupos</a>
		</div>
		</div>
	</body>
</html>