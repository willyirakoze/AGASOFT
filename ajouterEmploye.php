<meta charset="UTF-8">
<?php
require_once("connection.php");

$matricule = $_POST['matricule'];
$section = $_POST['section'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$qualification = $_POST['qualification'];
$adresse = $_POST['adresse'];
$telephone = $_POST['telephone'];
$fonction = $_POST['fonction'];
$sexe = $_POST['sexe'];
$nationalite = $_POST['nationalite'];
$nomPhoto= $_FILES['photo']['name']; 
$file_tmp_name= $_FILES['photo']['tmp_name'];
/*$Age1 = mysql_real_escape_string(htmlspecialchars($_POST['datey']));
$Age2 = mysql_real_escape_string(htmlspecialchars($_POST['datem']));
$Age3 = mysql_real_escape_string(htmlspecialchars($_POST['datej']));
  $Age = ("$Age1".','."$Age2".','."$Age3");*/
/*$date_emboche= $_POST['emboche'];*/
$embauche = $_POST ['date_embauche'];
$aujourdui=date('Y-m-d');

if (isset($_POST['date_embauche'])) 
{
	if ($embauche<=$aujourdui) 
	{
		# puis insertion de donne de l'employe
	
move_uploaded_file($file_tmp_name, "./images/employe/$nomPhoto");
$req = "insert into employe (MATRICULE_EMPLOYE,FONCTION, NOM, PRENOM, QUALIFICATION,ADRESSE,TELEPHONE,SEXE, NATIONALITE, PHOTO) 
	values('$matricule','$fonction','$nom','$prenom','$qualification','$adresse','$telephone','$sexe','$nationalite','$nomPhoto')";
mysql_query($req) or (die (mysql_error()));

$reqTrav = "insert into travaille (ID_SECTION, MATRICULE_EMPLOYE,DATE_EMBAUCHE)	values('$section','$matricule','$embauche')";
mysql_query($reqTrav) or (die (mysql_error()));
$OK=1;
}else

  {
	echo "<script>
	alert('Date d\'embauche incorrecte, Veuillez corriger!!!') ;
	</script>";
	$OK=0;
  }
}#fin de verfication d'abonnement mansue
?>

<html>
<?php include ("entete_admin.php");?>
  <div class="content">
<body>
	<table border="">

		<tr>
			<td> Matricule:</td>
			<td><?php echo ($matricule)?></td>
		</tr>
		
		<tr>
			<td> Nom:</td>
			<td><?php echo ($nom)?></td>
		</tr>

		<tr>
			<td> Prenom:</td>
			<td><?php echo ($prenom)?></td>
		</tr>

		<tr>
			<td> Qualification:</td>
			<td><?php echo ($qualification)?></td>
		</tr>

		<tr>
			<td> Adresse:</td>
			<td><?php echo ($adresse)?></td>
		</tr>

		<tr>
			<td> Téléphone:</td>
			<td><?php echo ($telephone)?></td>
		</tr>

		<tr>
			<td> Sexe:</td>
			<td><?php echo ($sexe)?></td>
		</tr>

		<tr>
			<td> Nationalité:</td>
			<td><?php echo ($nationalite)?></td>
		</tr>

		<tr>
			<td> Date embauche:</td>
			<td><?php echo ($embauche)?></td>
		</tr>
		<tr>
			<td> Photo:</td>

			<td><img src= "images/employe/<?php echo ($nomPhoto)?>" width="150px";height="120px";</td>
		</tr>
	</table>

	<?php if ($OK==0) {
			echo "<h2>" ."Données incorrectes et non enregistrées . " ."</h2>";
			echo "<a href='saisieEmploye.php'>"."Nouveau employe"."</a>";
		}?>
	
	<?php if ($OK==1) {
		echo "<script>alert('Employé est enregistré avec succès!!!') ;</script>";
		echo "<h2>" ."Employé de l'Entente Sportive de Bujumbura-section PISCINE . " ."</h2>";
			echo "<a href='afficherEmploye.php'>"."Afficher tous les employés"."</a>";
		}?>
</div><?php include ("pied.php");?>
</body>
</html>