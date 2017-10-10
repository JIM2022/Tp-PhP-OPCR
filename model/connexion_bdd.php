<?php
	try {
		$bdd = new PDO('mysql:host=localhost:8889;dbname=Minichat', 'root', 'root');
	}
	    catch (PDOException $e){
		    echo "Echec de connexion:" . $e->getMessage();
	    }

      // Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message,date_format(date_ajout, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM chat ORDER BY ID DESC LIMIT 0, 10');


?>
