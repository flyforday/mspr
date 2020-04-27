<?php

session_start();




if (isset($_POST['csend'])) {

	if (!empty($_POST['uname']) && !empty($_POST['psw'])) {

        $q = getUtilisateur($pseudo);
		if ($compte = $q->fetch()) {

			if (password_verify($_POST['psw'], $compte['pass'])) {

				//SESSION//

				$_SESSION['pseudo'] = $compte['pseudo'];

				$_SESSION['name_user'] = $compte['name_user'];

				$_SESSION['surname_user'] = $compte['surname_user'];

				$_SESSION['mail'] = $compte['mail'];



				//TP//

				header("Location: /index.php");

			} else {

				$cerreur = "Erreur mot de passe";

			}

		} else {

			$cerreur = "Ce pseudo n'existe pas";

		}

	} else {

		$cerreur = "Merci de remplir tout les champs";

	}

}



?>