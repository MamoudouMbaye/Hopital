<html>
<head></head>
<body>
<table width="40%" border="0" cellspacing="0">

<tr bgcolor="silver">
	<th> Nom </th><th> Prenom </th>
	<th> Specialite </th><th> Service </th>
</tr>
<?php

	$db = mysqli_connect("localhost","root","","hopital");
	$req = "select * from medecins order by nom";
	$res = mysqli_query($db, $req);
	if(!$res)
		echo mysqli_error($db);
	$i = 0;
	while($ligne = mysqli_fetch_assoc($res))
	{
		$i++;
		?>
		<tr <?php if($i%2==0) {echo 'bgcolor="#b5afbb"';}?>>
				<td><?=$ligne["nom"];?></td>
				<td><?=$ligne["prenom"];?></td>
				<td><?=$ligne["specialite"];?></td>
				<td><?=$ligne["service"];?></td>
				<td align="center"><a href'modifier.php?numed=".$ligne["numed"]."'><img src="image/edit.png" width="15px"></td>
				<td align="center"><a href'supprimer.php?numed=".$ligne["numed"]."'><img src="image/delete.png" width="15px"></td>

			 </tr>
	<?php
	}
	?>
</table>
</body>
</html>
