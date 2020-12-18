<?php
echo $_POST["spe"];
$spe = $_POST["spe"];
?>

<html>
<head></head>
<body>
<h1> Liste des <?=$spe;?>(s)</h1>
<table>

<tr>
 <th> Nom </th><th> Prenom </th>
 <th> Specialite </th><th> Service </th>
</tr>
<?php

 $db = mysqli_connect("localhost","root","","hopital");
 $req = "select * from medecins where specialite='$spe' order by nom";
 $res = mysqli_query($db, $req);
 if(!$res)
   echo mysqli_error($db);
 $i = 0;
 while($ligne = mysqli_fetch_assoc($res))
 {
   $i++;
   if($i%2 == 0)
   {
     echo "<tr>
         <td>".$ligne["nom"]."</td>
         <td>".$ligne["prenom"]."</td>
         <td>".$ligne["specialite"]."</td>
         <td>".$ligne["service"]."</td>
        </tr>";
   }else{
     echo "<tr bgcolor='#707001'>
         <td>".$ligne["nom"]."</td>
         <td>".$ligne["prenom"]."</td>
         <td>".$ligne["specialite"]."</td>
         <td>".$ligne["service"]."</td>
        </tr>";
   }
 }


?>
