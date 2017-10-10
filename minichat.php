<?php include 'model/connexion_bdd.php';?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link href="css/style.css" rel="stylesheet" />
	<title>Mini Chat OPCR</title>
</head>

<body>
	<div class="container-fluid">
		<nav class="navbar navbar-dark bg-dark">
			<div class="col-12">
				<h3 id="titre_1">Bienvenue sur le Mini-Chat</h3>
			</div>
			<a class="navbar-brand" href="#"></a>
		</nav>
		<form action="minichat_post.php" method="post">
			<div id="formulaire" class="row justify-content-center">
				<div class="col-3">
					<label for="pseudo">Votre Pseudo</label>
					<input type="text" name="pseudo"class="form-control" placeholder="Votre Pseudo">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-3">
					<label for="message">Votre Message</label>
					<textarea class="form-control" name="message" rows="4" placeholder="Votre Message"></textarea>
				</div>
			</div>
			<div class="row justify-content-center">
				<button type="submit" class="btn btn-primary">Valider</button>
			</div>
		</form>
	</div>
	<div class="container_message">
		<div class="row justify-content-center">
			<div class="col-3">
                <?php while ($donnees = $reponse->fetch()) { ?>
					<h4 id="date_ajout"><?php echo $donnees["date_fr"]; ?></h4>
					<h4 id="pseudo"><?php echo $donnees['pseudo']; ?></h4>
					<p id="message"><?php echo $donnees['message']; ?></p>
					<?php }
					$reponse->closeCursor();?>
			</div>
		</div>
	</div>
</body>
</html>
