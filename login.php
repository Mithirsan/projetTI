<?php

include "admin.php";

// on teste si nos variables sont définies
if (isset($_POST['login']) && isset($_POST['pwd'])) {
	
	$query = "SELECT * FROM users WHERE username LIKE ".$_POST['login']." AND password LIKE ".hash("sha256",$_POST['pwd']);

	// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
	if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd']) {
		// dans ce cas, tout est ok, on peut démarrer notre session

		// on la démarre :)
		session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['pwd'] = $_POST['pwd'];

		// on redirige notre visiteur vers une page de notre section membre
		header ('location: page_membre.php');
	}
	else {
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=index.htm">';
	}
}
else {
	echo 'Les variables du formulaire ne sont pas déclarées.';
}
?>


<?php include "navbar.php";>