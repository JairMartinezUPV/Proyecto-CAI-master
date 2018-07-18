<?php 

	$conexion=mysqli_connect('localhost','root','','mydb');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>idAlumnos</td>
			<td>nombre</td>
			<td>email</td>
			<td>carrera</td>	
			<td>Grupo_idGrupo</td>	
		</tr>

		<?php 
		$sql="SELECT * from alumnos";
		$sqli="SELECT idGrupo * from grupo";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
			
		 ?>

		<tr>
			<td><?php echo $mostrar['idAlumnos'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['email'] ?></td>
			<td><?php echo $mostrar['carrera'] ?></td>
			<td><?php echo $mostrar['Grupo_idGrupo'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>