<meta charset="UTF-8">
<?php
require_once("connection.php");
$matricule = $_POST['matricule'];
$abonnement = $_POST['Type_abonnement'];
$req = "insert into abonnement(MATRICULE,TYPE_ABONNEMENT ) values('$matricule','$abonnement')";
mysql_query($req) or (die (mysql_error()));

echo "<script>

alert('abonnement enregistrer avec succes!!!') ;

</script>";
?>

<html>
<?php include ("entete_admin.php");?>
  <header>


  </header>
  <div class="content">
<body>
	<table border="">

		<tr>
			<td> Matricule:</td>
			<td><?php echo ($matricule)?></td>
		</tr>
		<tr>
			<td> Type abonnement:</td>
			<td><?php echo ($abonnement)?></td>
		</tr>

	</table>
<a href="afficherAbonnement.php">Afficher tous les abonnements</a>
</div><?php include ("pied.php");?>
</body>
</html>