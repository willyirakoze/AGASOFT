<meta charset="UTF-8">
<?php
require_once("connection.php");
$douze_ans =  date('Y-m-d',strtotime("-12 years"));
$huit_ans = date('Y-m-d',strtotime("-8 years"));
$aujourdui = date('Y');

$select="SELECT client.MATRICULE,client.NOM,client.PRENOM, participe.SCORE, participe.DATE_TOURNOIS,client.SEXE,client.DATE_NAISSANCE
 FROM client, participe where client.SEXE='Masculin' and participe.MATRICULE=client.MATRICULE and (client.DATE_NAISSANCE BETWEEN '$douze_ans'
  and '$huit_ans')  ORDER BY participe.SCORE DESC  limit 0,4";
$rSet=mysql_query($select) or (die (mysql_error()));

/*$affiche="SELECT NOM,PRENOM FROM client ";
$rSetaffi=mysql_query($affiche) or (die (mysql_error()));*/
?>

<html>
<title>Abonnement </title>
<link rel="stylesheet" type="text/css" href="css/menu_admin.css" />
<?php include ("entete_rec.php");?>
  <header>
  </header>
  <div class="content">
<body>
	<br><p><h3><u><br>Classement des cinq premiers participants au tournois de l'année:<?php echo "$aujourdui"?></u></h3></p>
	<?php while($cl=mysql_fetch_assoc($rSet)) {?>

<table >
		<tr>
			
			<td> <?php echo ($cl['NOM'])?></td> 
			<td> <?php echo ($cl['PRENOM'])?></td> <td><?php echo ""."qui a comme matricule " .""?> </td><td> <?php echo ($cl['MATRICULE'])?></td>
		
			<td> <?php echo ""."a eu: " .""?></td>
			<!-- <td><?php echo($cl['SEXE'])?></td>
			<td><?php echo($cl['DATE_NAISSANCE'])?></td> -->
			<td><b><u><?php echo($cl['SCORE'])?></u></b></td>

			
		</tr>
	</table>
	
<?php }  ?>
</div><?php include ("pied.php");?>
</body>
</html>