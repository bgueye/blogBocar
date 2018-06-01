<!DOCTYPE html>
<html lang="fr">
<head>
	<title>traitement</title>
</head>
<body>
<?php 
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$message = $_POST['message'];
	echo "<h3>Bienvenue ".$prenom.' '.$nom,"</h3>";
 	echo "<p>Message: ".$message."</p>";
 	echo "<p><a href='index.php'>Retour au formulaire</a></p>";
 ?>
</body>
</html>
