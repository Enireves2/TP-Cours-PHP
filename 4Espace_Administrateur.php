<?php
session_start();

?>

<! doctype html>
<html>
    <head>
	<meta charset="utf-8" />
	<title>Administration</title>
    </head>
    
    <body>

	<h1>Bonjour <?php echo $_SESSION['prenom'] ; ?> </h1>
	<p>Bienvenue dans votre espace administrateur</p>

    </body>
</html>