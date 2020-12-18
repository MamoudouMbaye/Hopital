<?php
$numed = $_POST["numed"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$service = $_POST["service"];
$specialite = $_POST["spe"];

$db = mysqli_connect("localhost","root","","hopital");
	$req = "update medecins set
					nom = '$nom',
					prenom = '$prenom',
					specialite = '$specialite',
					service = '$service'
			where numed='$numed'";
	$res = mysqli_query($db, $req);
	echo "Le medecin numero $numed a ete modifie";
	header("refresh:3;url=afficheMed.php");

?>
