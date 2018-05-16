<?php

	include "../admin.php";
	
	//Récupération des données du formulaire
	$username = $_POST['username'];
//	$password = hash('sha256', $_POST('password'));		//cryptage du mot de passe
    $password = password_hash($_POST['pass'], PASSWORD_DEFAULT); //plus conforme actuellement.
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$birthDate = $_POST['date'];

	if(isset($_POST['phone'])){
		$phone = $_POST['phone'];
		
		//requête si phone
		$query = "INSERT INTO users(username, mail, password, birthDate, firstName, lastName, phone) VALUES ('$username','$mail','$password','$birthDate','$firstName','$lastName','$phone')";
	}
	
	//requête sans phone
	else
	{
		$query = "INSERT INTO users(username, mail, password, birthDate, firstName, lastName, phone) VALUES ('$username','$mail','$password','$birthDate','$firstName','$lastName')";
	}
	
	//préparation de la requête
	$request = $bdd -> prepare($query);
	
	//Tentative d'inscription
	try{
		$request -> execute();
		echo 'Welcome';		
	}
	
	//Inscription ratée
	catch(Excetpion $e){
		echo $e -> getMessage();
	}
	
	//Fermeture du curseur
	$request -> closeCursor();
?>