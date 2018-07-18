<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
echo $_POST["id"];
echo $_POST["activity"];
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $idxd = $_POST['id'];
    $activityxd = $_POST['activity'];
    $sql = "INSERT INTO registro (idregistro, activity, Alumnos_idAlumnos)
    VALUES ('$idxd', '$activityxd','$idxd')";
    // use exec() because no results are returned
    $conn->exec($sql);
    header("Location:index.html");
    exit();
    }
catch(PDOException $e)
    {
    echo 'Error: ' . $e->getMessage();
    header("Location:CAI2.html");
    exit();
    }
    
    $conn = null;
?>