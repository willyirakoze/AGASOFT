<?php
require_once("connection.php");
$req="select * from client";
$rSet=mysql_query($req)or die(mysql_error());

?>
 <!DOCTYPE html>
<html>
 <head>
 	<meta charset="UTF-8">	
 	<title>Tous les photo des clients</title>
 </head>
  <body>
   <table border="1"> 
 	<tr> 
 		<th>Matricule</th>
 		<th> Nom</th>
 		<th>Prenom</th>
 		<th>Photo</th>

 	</tr>
	<?php while($cl=mysql_fetch_assoc($rSet)) {?>
		<tr>
			<td> <?php echo $cl['MATRICULE']?></td>
			<td> <?php echo ($cl['NOM'])?></td>
			<td> <?php echo ($cl['PRENOM'])?></td>
			<td><img src="images/<?php echo ($cl['PHOTO'])?>" width="150px";height="120px"; 
			</td>
		</tr> 
	<?php }  ?> 
  </table>
 </body>
</html>