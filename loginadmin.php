<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
echo $_POST["user"];
echo $_POST["pwd"];
try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$userxd = $_POST['user'];
	$pwdxd = $_POST['pwd'];
	session_start();
	$sql = "SELECT * FROM admin WHERE nombre = ? AND contrasena = ?";
	$statement = $conn->prepare($sql);
	$statement->execute([$userxd,$pwdxd]);
	$count = $statement->rowCount();
	echo $count;
	if ($count>0) {
		$_SESSION["user"] = $userxd; 
		header("Location:SesionAdmin.php");
		exit();
	}else{
		header("Location:login-page.html");
		exit();
	}
}
catch(PDOException $e)
{
	echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>