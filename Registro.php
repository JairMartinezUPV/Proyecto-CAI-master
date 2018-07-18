<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

echo $_POST["name"];
echo $_POST["id"];
echo $_POST["email"];
echo $_POST["carreer"];
echo $_POST["group"];   
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $namexd = $_POST["name"];
    $idxd = $_POST["id"];
    $emailxd = $idxd . "@upv.edu.mx";
    $carrxd = $_POST["carreer"];
    $groupxd = $_POST["group"];
    $sql = "INSERT INTO alumnos(idAlumnos, nombre, email, carrera, Grupo_idGrupo)
    VALUES ('$idxd', '$namexd', '$emailxd', '$carrxd', '$groupxd')";
    // use exec() because no results are returned
    $conn->exec($sql);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?>