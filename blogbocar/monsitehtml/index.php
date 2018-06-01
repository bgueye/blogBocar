<!DOCTYPE html>
<html>
<head>
	<title>formulaire</title>
	<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>
	<form action="traitement.php" method="post">
	    <div>
	        <label for="nom">Nom :</label>
	        <input type="text" id="nom" name="nom" />
	    </div>
	    <div>
	        <label for="prenom">Prénom :</label>
	        <input type="text" id="prenom" name="prenom" />
	    </div>
	    <div>
	        <label for="courriel">Courriel :</label>
	        <input type="email" id="courriel" name="courriel"/>
	    </div>
	    <div>
	        <label for="message"> Message :</label>
	        <textarea id="message" name="message"></textarea>
	    </div>
	    <div class="button">
	    	<button type="submit">Valider</button>
	    </div>
	</form>

</body>
</html>