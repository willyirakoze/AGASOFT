<?php
require_once("connection.php");
$matricule=0;
$matricule=$_GET['matricule'];
$req= "select PHOTO, MATRICULE, NOM, PRENOM from client where MATRICULE='$matricule'";
$rSet=mysql_query($req)or die(mysql_error());
?>
<?php
$matricule=0;
$matricule=$_GET['matricule'];
$reqpaie= "select DATE_DEBUT, DATE_FIN from paie where MATRICULE='$matricule'";
$rSetp=mysql_query($reqpaie)or die(mysql_error());

?>

<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
	<title>Impression Carte </title>
<link href="css/menu_admin.css" rel="stylesheet" type="text/css" />
<!-- <link href="css/entete.css" rel="stylesheet" type="text/css"/> -->
</head>
<body>	

<div class="content1">
	
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<p><h2><i><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		Entente Sportive de Bujumbura </span></i></h2></p>
	<h4> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		Section Piscine: Carte de Membre</h4>
 <?php while($cl=mysql_fetch_assoc($rSet)) {?>
	<tr>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<td><img src="images/<?php echo ($cl['PHOTO'])?>"width="100px";height="130px";</td><br>
	</tr> 
	<tr> 
			<h3><td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				Matricule &nbsp:&nbsp<?php echo $cl['MATRICULE']?></td></h3>

			<h3><td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				Nom &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :&nbsp<?php echo ($cl['NOM'])?></td></h3>

			<h3><td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

				Prénom &nbsp&nbsp&nbsp&nbsp:&nbsp<?php echo ($cl['PRENOM'])?></td></h3>

			<!-- <h3><td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

				Début &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<?php echo ($cl['DATE_DEBUT'])?></td></h3>

			<h3><td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

				Valité &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<?php echo ($cl['DATE_FIN'])?></td></h3><br> -->
	</tr> 

	<?php }  ?> 

<?php while($cl=mysql_fetch_assoc($rSetp)) {?>
	<tr>
			

			<h3><td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

				Début &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<?php echo ($cl['DATE_DEBUT'])?></td></h3>

			<h3><td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

				Fin &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<?php echo ($cl['DATE_FIN'])?></td></h3>
	</tr> 

	<?php }  ?> 
	

</div>
</body>
</html>
