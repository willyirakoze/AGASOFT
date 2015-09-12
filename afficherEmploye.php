<?php
require_once("connection.php");
$req="select * from employe ORDER BY MATRICULE_EMPLOYE ASC LIMIT 10";
$rSet=mysql_query($req)or die(mysql_error());

?>
 <!DOCTYPE html>
<html>
 <head>
 	<meta charset="UTF-8">	
 	<title>Tous les employés</title>
 </head>
  <body>
	<?php include ("entete_admin.php");?>
	<div class="content">
		<br>
   <table border="1"><caption><b><u> Liste de nos Employés</u></b></caption>
 	<tr> 
 		<th>Matricule</th>
 		<th> Nom</th>
 		<th>Prenom</th>
 		<th>Qualification</th>
 		<th>Adresse</th>
 		<th>Téléphone</th>
 		<!-- <th>Sexe</th> -->
 		<th>Nationalite</th>
 		<th>Photo</th>

 	</tr>
	<?php while($cl=mysql_fetch_assoc($rSet)) {?>
		<tr>
			<td> <?php echo $cl['MATRICULE_EMPLOYE']?></td>
			<td> <?php echo ($cl['NOM'])?></td>
			<td> <?php echo ($cl['PRENOM'])?></td>
			<td> <?php echo ($cl['QUALIFICATION'])?></td>
			<td> <?php echo ($cl['ADRESSE'])?></td>
			<td> <?php echo ($cl['TELEPHONE'])?></td>
			<!-- <td> <?php echo ($cl['SEXE'])?></td> -->
			<td> <?php echo ($cl['NATIONALITE'])?></td>
			<td><img src="images/employe/<?php echo ($cl['PHOTO'])?>" width="150px";height="120px"; </td>
			<!-- <td><a href ="supprimerClient.php?matricule=<?php echo $cl['MATRICULE']?>">Supprimer</a> </td>
			<td><a href ="editeClient.php?matricule=<?php echo $cl['MATRICULE']?>">Editer</a> </td> -->
		</tr> 
	<?php }  ?> 
  </table>
  </div>
 </body><?php include ("pied.php");?>
</html>