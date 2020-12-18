<?php
$numed = $_GET["numed"];
?>
<html>
<head></head>
<body>
<?php
	$db = mysqli_connect("localhost","root","","hopital");
	$req = "select * from medecins where numed='$numed'";
	$res2 = mysqli_query($db, $req);
	$ligne2 = mysqli_fetch_assoc($res2);

?>
<h1> Modification infos Medecin </h1>
<form action="modif2.php" method="post">
  Nom : <input type="text" name="nom" value="<?= $ligne2["nom"];?>" /><br><br>
  prenom : <input type="text" name="prenom" value="<?= $ligne2["prenom"];?>" /><br><br>

Choisir une specialite :
<select name="spe">

	<?php
		$db = mysqli_connect("localhost","root","","hopital"); //connexion bdd
		$req = "select distinct specialite from medecins order by specialite";
		$res = mysqli_query($db, $req);
		while($ligne = mysqli_fetch_assoc($res))
			{
			?>
			<option
	<?php if($ligne2["specialite"]==$ligne["specialite"]) echo " selected ";?>
				> <?=$ligne["specialite"];?></option>
			<?php }
	?>
</select><br /><br />
Service : <input type="text" name="service" value="<?= $ligne2["service"];?>" />
<input type="hidden" name="numed" value="<?= $ligne2["numed"];?>">
<br /><br />
<input type="submit" value="Envoyer" />

</form>
