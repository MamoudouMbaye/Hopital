<?php
session_start();

if(!isset($_SESSION["log"]))
{
	header("location:formConnect.php");
}
?>

<html>
<head></head>
<body>
<h1> Page Privee </h1>

<a href="deconnect.php"> Deconnexion </a>
