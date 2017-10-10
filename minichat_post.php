<?php include "model/connexion_bdd.php" ?>
<?php

if (
	empty($_POST['pseudo'])OR
	empty($_POST['message'])

	){
		echo "Merci de remplir l'ensemble des champs"; }

	else{

		include_once 'model/connexion_bdd.php';

// Insertion du message à l'aide d'une requête préparée

$req = $bdd->prepare('INSERT INTO chat (pseudo, message, date_ajout) VALUES(?, ?, NOW())');
$req->execute(array($_POST['pseudo'], $_POST['message']));
}
// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
?>
