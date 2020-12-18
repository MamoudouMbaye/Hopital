<?php
session_start();
?>
<html>
<head></head>
<body>
<h1> Session 1 </h1>
<a href="session2.php"> Session2 </a>
<?php
$_SESSION["connect"] = 1;
?>
