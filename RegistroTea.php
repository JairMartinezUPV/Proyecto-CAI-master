<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
echo $_POST["name"];
echo $_POST["pwd"];
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $namexd = $_POST["name"];
    $pwdxd = $_POST["pwd"];
    $sql = "INSERT INTO teacher(nombre, contrasena)
    VALUES ('$namexd', '$pwdxd')";
    // use exec() because no results are returned
    $conn->exec($sql);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?>