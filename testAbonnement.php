<meta charset="UTF-8">
<?php
require_once("connection.php");
$select="SELECT paie.MATRICULE,paie.DATE_DEBUT,paie.DATE_FIN,client.NOM,client.PRENOM, client.DATE_NAISSANCE FROM paie , client where paie.ID_ABONNEMENT='8' 
				AND paie.MATRICULE=client.MATRICULE ORDER BY client.DATE_NAISSANCE DESC";


$aujoudui=date('Y-m-d');
/*
$douze_ans =  date('Y-m-d',strtotime("-12 years"));*/
// $ans= date(DATE_DEBUT);






$rSet=mysql_query($select) or (die (mysql_error()));

?>

		
		
<html>
<title>Test Abonnement </title>
<link rel="stylesheet" type="text/css" href="css/menu_admin.css" />
<?php include ("entete_admin.php");?>
  <header>
  </header>
  <div class="content">
<body>
	<br><p><h3><u><br>Tous les abonnés Adultes de cette année</u></h3></p>
 
<?php while($cl=mysql_fetch_assoc($rSet)) {?>

	

<table >
	<tr>
			<?php 
				$aujoudui=date('Y-m-d');
				$fin=$_POST['fin'];
				$fin1=strtotime($fin);
				$debut=$_POST['debut'];
				$debut1=strtotime($debut);
				$A=($fin1 - $debut1)/86400;
				
			echo "$fin";
		?>


		<td> <?php echo ($cl['MATRICULE']) ?>)</td>
		<td> <?php echo ($cl['NOM'])?></td> 
		<td> <?php echo ($cl['PRENOM'])?></td>		
		<td> <?php echo ""."est né(e)en " .""?></td>
		<td><?php echo($cl['DATE_NAISSANCE'])?></td>
		<td> <?php echo ""."Abonnement valable jusqu'au " .""?></td>
		<td><?php echo($cl['DATE_FIN'])?></td>
		
			
	

	</tr>
</table>


<?php }  ?>

 </div><?php include ("pied.php");?>
</body>
</html>