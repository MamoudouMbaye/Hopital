<?php

$numed = $_GET["numed"];

$db = mysqli_connect("localhost","root","","hopital");
    $req = "delete from medecins where numed='$numed'";
    $res = mysqli_query($db, $req);
    echo "Le medecin numero $numed a été supprimé"
    header["refresh:5:url=affichemed2.php"];

?>
