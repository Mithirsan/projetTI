<?php

	$servername = 'localhost';
	$db = 'project';

	//Récupération de la bdd
	try {
			$bdd = new PDO('mysql:host=$servername;dbname=$db', 'root', '');
			$bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
	catch(PDOException $e)
	{
		echo 'Connection failed: ' . $e->getMessage() .'<br/>';
	}
	
	//Récupération des données du formulaire
	$username = $_POST('username');
	$password = hash('sha256', $_POST('password'));		//cryptage du mot de passe
	$firstName = $_POST('firstName');
	$lastName = $_POST('lastName');
	$email = $_POST('email');
	
	if($_POST('phone'){
		$phone = $_POST('phone');
		
		//requête si phone
		$query = 'INSERT INTO users(username, password, mail, birthDate, firstName, lastName, phone) VALUES ('.$username.', '.$password.', '.$mail.', '.$birthDate.', '.$firstName.', '.$lastName.', '.$phone.');';
	}
	
	//requête sans phone
	else
	{
		$query = 'INSERT INTO users(username, password, mail, birthDate, firstName, lastName) VALUES ('.$username.', '.$password.', '.$mail.', '.$birthDate.', '.$firstName.', '.$lastName.');';	
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