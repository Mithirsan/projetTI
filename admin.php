<?php
$servername = "localhost";
$username = "root";
$password = "";
$myDB="homesweethome";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$myDB;charset=utf8;", $username, $password);
    // set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully <br/>"; 
    }
catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
?>
	