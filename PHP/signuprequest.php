<?php

	include "../admin.php";
	
	//Récupération des données du formulaire
	$username = $_POST['username'];
//	$password = hash('sha256', $_POST('password'));		//cryptage du mot de passe
    $password = hash('sha256', $_POST['password']); //plus conforme actuellement.
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$mail = $_POST['email'];
	$birthDate = ($_POST['birthDate']);
	


	if(isset($_POST['phone'])){
		$phone = $_POST['phone'];
		
		//requête si phone

		$query = "INSERT INTO users(username, password, mail, birthDate, firstName, lastName, phone) VALUES ('$username', '$password', '$mail', '$birthDate', '$firstName', '$lastName', '$phone')";


	}
	
	//requête sans phone
	else
	{

		$query = "INSERT INTO users(username, password, mail, birthDate, firstName, lastName) VALUES ('$username', '$password', '$mail', '$birthDate', '$firstName', '$lastName')";	


	}
	
	//préparation de la requête
	$request = $bdd -> prepare($query);
	
	//Tentative d'inscription
	try{
		$request -> execute();
		include "../home.php";
	}
	
	//Inscription ratée
	catch(Excetpion $e){
		echo $e -> getMessage();
	}
	
	//Fermeture du curseur
	$request -> closeCursor();
?>

<HEAD>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css" >
	<script type="text/javascript" src="JS/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="JS/popper.js"></script>
	<script type="text/javascript" src="JS/tooltip.js"></script>
	<script type="text/javascript" src="JS/bootstrap.js"></script>
	
	
	<!--OUR FILES -->
	<!--        <link rel="stylesheet" type="text/css" href="CSS/style.css" > -->
	<script type="text/javascript" src="JS/script.js"></script>
	
	<!--FAVICON AND TITTLE -->
	<link rel="icon" type="image/png" href="ressources/images/logo.png" />
	<title>HomeSweetHome</title>
</HEAD>