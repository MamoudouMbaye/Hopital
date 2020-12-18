<?php
session_start();
if(isset($_POST["bouton"])){
$log = $_POST["log"];
$mdp = $_POST["mdp"];

$db = mysqli_connect("localhost","root","","hopital");
	$req = "select * from user where login='' or '1' and mdp='$mdp'";
	$res = mysqli_query($db, $req);
if(mysqli_num_rows($res) > 0)
{
	$_SESSION["log"] = $log;
	header("location:pagePrivee.php");
}else $erreur = "Erreur de login ou mot de passe";
}
?>
<html>
<head></head>
<body>

<h1> Connexion </h1>
<form action="" method="post">
<?php if(isset($erreur)) {
	echo"<h2>$erreur</h2>";
}
	?>
  Log : <input type="text" name="log" /><br><br>
  Mdp : <input type="password" name="mdp" /><br><br>
<input type="submit" value="Connexion" name="bouton" />
