<meta charset="UTF-8">
<?php
require_once("connection.php");
/*$select="SELECT MATRICULE FROM paie WHERE ID_ABONNEMENT='1'";*/
$select="SELECT paie.MATRICULE,paie.DATE_DEBUT,paie.DATE_FIN,client.NOM,client.PRENOM, client.DATE_NAISSANCE FROM paie , client where paie.ID_ABONNEMENT='7' 
				AND paie.MATRICULE=client.MATRICULE ORDER BY paie.DATE_FIN DESC";
$date_aujoudui=date('Y-m-d');
$rSet=mysql_query($select) or (die (mysql_error()));

/*$affiche="SELECT NOM,PRENOM FROM client ";
$rSetaffi=mysql_query($affiche) or (die (mysql_error()));*/
?>

<html>
<title>Abonnement </title>
<link rel="stylesheet" type="text/css" href="css/menu_admin.css" />
<?php include ("entete_admin.php");?>
  <header>
  </header>
  <div class="content">
<body>
	<br><p><h3><u><br>Tous les abonnés Enfants de cette année</u></h3></p>
	<?php while($cl=mysql_fetch_assoc($rSet)) {?>

<table border=""; >
<!-- <tr> <th>MATRICULE</th> <th>LES NOMS</th> <th>VALIDITE</th>  <th> STATUS</th> </tr> -->

	<tr>
		<td> <?php echo ($cl['MATRICULE'])?>)</td>
		<td> <?php echo ($cl['NOM'])?> 
		 <?php echo ($cl['PRENOM'])?></td>
		<td> <?php echo ""."Abonnement valable jusqu'au " .""?>
		<?php echo($cl['DATE_FIN'])?></td>
		<td><?php if(($cl['DATE_FIN'])<=($date_aujoudui) )
				{
					echo "<p style='background-color: rgb(227, 28, 28);';> <b>Abonnement expiré</b></p>";
				}else
				{
					echo "<p style='background-color: rgb(57,202,53);';> <b>Abonnement Valide</b></p>";
				}
			?>
		</td><br/>
		<input type="hidden" name="debut" value="<?php echo ($cl['DATE_DEBUT'])?>" />
		<input type="hidden" name="fin" value="<?php echo ($cl['DATE_FIN'])?>" />
	</tr>
</table>
	
<?php }  ?>
</div><?php include ("pied.php");?>
</body>
</html>