<?php
require_once("connection.php");
$score=$_POST['score'];
$dateScore =$_POST['dateScore'];
$IdTournois='1';
$MatTournois=$_POST['mat'];
$dateT1 =  date('Y-01-01');
$dateT2 =  date('Y-12-31');

if ($dateScore>=$dateT1 && $dateScore<=$dateT2) {
/*Avant l'insertion du score*/
$Sele= mysql_query("SELECT * from participe WHERE MATRICULE='$MatTournois' and (DATE_TOURNOIS BETWEEN '$dateT1' and '$dateT2')");
$row=mysql_num_rows($Sele);
if ($row==0) {	 
	$reqScore = "insert into participe (MATRICULE,ID_TOURNOIS,DATE_TOURNOIS,SCORE) values('$MatTournois','$IdTournois','$dateScore','$score')";
mysql_query($reqScore) or (die (mysql_error()));
echo "<script>
alert('Score ajouter!!!') ;
</script>";
}else
{
echo "<script>
alert('Erreur car le client a déjà participé au tournois de l\'année en cours.') ;
</script>";

}

/*$reqScore = "insert into participe (MATRICULE,ID_TOURNOIS,DATE_TOURNOIS,SCORE) values('$MatTournois','$IdTournois','$dateScore','$score')";
mysql_query($reqScore) or (die (mysql_error()));*/
}
else
 {
echo "<script>
alert('Date du tournois ne correspond pas à l\'année en cours, Veuillez corriger SVP!!!') ;
</script>";
}

/*header ("location:saisieTournois.php");*/
?>



<meta charset="UTF-8">
<?php
require_once("connection.php");
/*$aujourdui=date('Y-m-d');*/
$douze_ans =  date('Y-m-d',strtotime("-12 years"));
$huit_ans = date('Y-m-d',strtotime("-8 years"));
/*$select="SELECT * FROM det_tournoi WHERE DATE_NAISSANCE >=$huit_ans AND DATE_NAISSANCE <=$dix_ans";*/
$select="SELECT * FROM client WHERE DATE_NAISSANCE BETWEEN '$douze_ans' and '$huit_ans'and SEXE='Masculin' ";
$rSet=mysql_query($select) or (die (mysql_error()));
?>

<html>
<?php include ("entete_rec.php");?>

<body>

 <div class="content">

 	<!-- **************************************************************************************************************** -->
 	<table border='1';><tr><td>
	<fieldset style="width: 345px;">
<legend>Participants au tournois</legend>
	<?php while($cl=mysql_fetch_assoc($rSet)) {?>
<form method= "POST" action ="ajoutTournois12ansrec.php" enctype= "multipart/form-data">
	<table >
		<tr>
			<td> <?php echo ($cl['MATRICULE'])?>)</td> 
			
			<input type="hidden" name="Rien" value="<?php echo ($cl['MATRICULE'])?>)" />
			<td><a href='tournois12ansrec.php?id=<?php echo $cl['MATRICULE'];?>'><?php echo ($cl['NOM'])?></a></td>
			<input type="hidden" name="nom" value="<?php echo ($cl['NOM'])?>" />
			<td> <?php echo ($cl['PRENOM'])?></td>
			<!-- <td><input type="text" name="score" value="" placeholder="Score obtenu"></td> -->
		</tr>
	</table>


<?php 
}  ?></fieldset> <!-- <input type=submit name="save" class="savebutton" value="EnregistrerOk"> --></form>
</td><td>
<!-- formulaire d'ajout du score -->
<fieldset><legend>Ajout du score et de la date</legend>
<?php 

/*require("connection.php");*/

if (isset($_GET['id'])) {
	$m=$_GET['id'];
	$dateT1 =  date('Y-01-01');
	$dateT2 =  date('Y-12-31');

$select1= mysql_query("SELECT * FROM client WHERE MATRICULE='$m'");
		
		while($row = mysql_fetch_array($select1)){
			
			$e = $row['NOM'];
		}

echo "$e"."</br>";

	//echo "vyabaye"."$dateT2";
	?>
	
<form method= "POST" action ="ajoutTournois12ansrec.php" enctype= "multipart/form-data">
<input type="hidden" name="mat" value="<?php echo "$m";?>">
<!-- <input type="hidden" name="Rien" value="<?php echo ($cl['MATRICULE'])?>)" /> -->
<input type="number" name="score" value=""  min="1" max="4" onkeypress='only_numeric(event)'placeholder="Note" required autofocus>
<input type="date" name="dateScore" required autofocus>
<input type="submit" name="ajouter" value="OK"> 


</form>

<?php

//$x=mysql_num_rows() pour calculer le nombre de foix k le client apparaisse 

}else{
	echo "Veuillez selectioner le nom pour ajouter le score correspondant";
}




?>
</fieldset>


</td></tr>
</table>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

</div><?php include ("pied.php");?>
</body>
</html>

