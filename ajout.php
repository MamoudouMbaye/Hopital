<?php
//print_r($_POST);

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$specialite = $_POST["spe"];
$service = $_POST["service"];

$db = mysqli_connect("localhost","root","","hopital");
	$req = "insert into medecins (nom,prenom,specialite,service)
					values ('$nom','$prenom','$specialite','$service')";
echo $req;
	$res = mysqli_query($db, $req);
header("location:afficheMed.php");

?>
