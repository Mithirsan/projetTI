<?php
	session_start();
	include "admin.php";

	// on teste si nos variables sont définies
	if (isset($_POST['login']) && isset($_POST['pwd'])) {
		
		$req = $bdd->prepare("SELECT * FROM users WHERE username LIKE :login AND pasword LIKE :pwd");
		$req->execute(array(
			'login' => $_POST['login'],
			'pwd' => hash("sha256",$_POST['pwd']
		));
		
		if($ans = $req->fetch()){
			$_SESSION['connected'] = 1;
			$_SESSION['login'] = $_POST['login'];
		}
		
	}
	else {
		echo 'Les variables du formulaire ne sont pas déclarées.';
	}
}
?>


<?php include "navbar.php";>