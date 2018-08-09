<?php

try {
	$mysqli = new mysqli('localhost', 'root', '', 'mydb');
	
    }
catch(PDOException $e)
    {
    echo 'Error: ' . $e->getMessage();
    }
?>