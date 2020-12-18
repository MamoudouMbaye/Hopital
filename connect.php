<?php
session_start();
$log = $_POST["log"];
$mdp = $_POST["mdp"];

$db = mysqli_connect("localhost","root","","hopital");
	$req = "select * from user where login='' or '1' and mdp='$mdp'";
	$res = mysqli_query($db, $req);
if(mysqli_num_rows($res) > 0)
{
	$_SESSION["log"] = $log;
	header("location:pagePrivee.php");
}else header("location:formConnect.php?erreur=1");

?>
