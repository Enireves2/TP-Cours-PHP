<?php
session_start();

?>

<! doctype html>
<html>
    <head>
	<meta charset="utf-8" />
	<title>Espace admin</title>
    </head>
    
    <body>

	<?php
	if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['ville']) AND isset($_POST['pays']) AND $_POST['password'] == "kangourou")
	{
	    $_SESSION['nom'] = $_POST['nom'];
	    $_SESSION['prenom'] = $_POST['prenom'];
	    $_SESSION['ville'] = $_POST['ville'];
	    $_SESSION['pays'] = $_POST['pays'];
	    $_SESSION['password'] = $_POST['password'];

	    // Redirection
	    header('Location: 4Espace_Administrateur.php');
	}
	
	if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['ville']) AND isset($_POST['pays']) AND $_POST['password'] == "truc")


	{
	    
	
	    $_SESSION['nom'] = $_POST['nom'];
	    $_SESSION['prenom'] = $_POST['prenom'];
	    $_SESSION['ville'] = $_POST['ville'];
	    $_SESSION['pays'] = $_POST['pays'];
	    $_SESSION['password'] = $_POST['password'];

	    // Redirection
	    header('Location: 3Espace_visiteurs.php');
	}
	
	else
	{
	    echo '<p>Bienvenue sur le site. Pour vous connecter à l\'administration cliquer <a href="1Connexion.php"> ici </a>.';

	}	
	    
	 ?> 
	
	
	
	
	
	<?php
	
 /*
	    if (isset($_POST['nom']) AND isset($_POST['prenom']) AND $_POST['password']== "kangourou")
	    {
		$_SESSION['nom'] = $_POST['nom'];
		$_SESSION['prenom'] = $_POST['prenom'];
		$_SESSION['password'] = $_POST['password'];
		
		// Redirection
		header('Location: 4Espace_Administrateur.php');
	    }
	    else
	    {
		echo '<p>Bienvenue sur le site. Pour vous connecter à l\'administration cliquer <a href="page1.php"> ici </a>.';
	    }
	    
	   
	    if ($_SESSION['password'] == "kangourou")
	    {
	    ?>
	
	    <h1>Bonjour <?php echo $_SESSION['prenom'] ; ?> </h1>
	    <p>Bienvenue dans votre espace d'administration</p>
	    
	    <?php
	    }
  * 
 */
	    ?>
	

	


    </body>
</html>
