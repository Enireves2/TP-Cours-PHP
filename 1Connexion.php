<?php
session_start();

setcookie('nom', 'prenom', time() + 365*24*3600, null, null, false, true);
setcookie('ville', 'France', time() + 365*24*3600, null, null, false, true);

?>

<! doctype html>
<html>
    <head>
	<meta charset="utf-8" />
	<title>Espace admin</title>
    </head>
    
    <body>
	
	<h1>Bonjour
	    <?php echo htmlspecialchars($_SESSION['name']); ?>
	</h1>

	<p>
	    Pour accéder à votre espace, veuillez remplir le formulaire.
	</p>

	<form method="POST" action="2Traitement_Connexion.php">
	    <p>
		<input type="text" name="nom" value="Votre nom" />
		<br /><br />
		
		<input type="text" name="prenom" value="Votre prénom" />
		<br /><br />
		
		<input type="text" name="ville" value="Votre ville" />
		<br /><br />
		
		<input type="text" name="pays" value="Votre pays" />
		<br /><br />

		<input type="password" name="password" />
		<br /><br />

		<input type="submit" value="Valider"/>
	    </p>
	</form>

    </body>

</html>
