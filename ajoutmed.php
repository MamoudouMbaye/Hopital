<html>
<head></head>
<body>

<h1> Ajout Medecin </h1>
<form action="ajout.php" method="post">
  Nom : <input type="text" name="nom" /><br><br>
  prenom : <input type="text" name="prenom" /><br><br>

Choisir une specialite :
<select name="spe">

	<?php
		$db = mysqli_connect("localhost","root","","hopital"); //connexion bdd
		$req = "select distinct specialite from medecins order by specialite";
		$res = mysqli_query($db, $req);
		while($ligne = mysqli_fetch_assoc($res))
			{
			?>
			<option> <?=$ligne["specialite"];?></option>
			<?php }
	?>
</select><br /><br />
Service : <input type="text" name="service" />
<br /><br />
<input type="submit" value="Envoyer" />

</form>
