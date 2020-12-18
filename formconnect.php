<html>
<head></head>
<body>

<h1> Connexion </h1>
<form action="connect.php" method="post">
<?php if(isset($_GET["erreur"])) {
	echo"<h2>Erreur de login ou mot de passe</h2>";
}
	?>
  Log : <input type="text" name="log" /><br><br>
  Mdp : <input type="password" name="mdp" /><br><br>
<input type="submit" value="Connexion" />
