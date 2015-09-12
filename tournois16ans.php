<meta charset="UTF-8">
<?php
require_once("connection.php");
$seize_ans =  date('Y-m-d',strtotime("-16 years"));
$treize_ans = date('Y-m-d',strtotime("-13 years"));
$select="SELECT * FROM client WHERE DATE_NAISSANCE BETWEEN '$seize_ans' and '$treize_ans' and SEXE='Masculin' ";


$rSet=mysql_query($select) or (die (mysql_error()));

/*$del=" TRUNCATE TABLE `det_tournoi` ";
mysql_query($del) or (die (mysql_error()));*/

?>



<html>
<?php include ("entete_admin.php");?>
  <header>


  </header>
 
<body>

 <div class="content">

 	<!-- **************************************************************************************************************** -->
 	<table border='1';><tr><td>
	<fieldset style="width: 345px;">
<legend>Participants au tournois</legend>
	<?php while($cl=mysql_fetch_assoc($rSet)) {?>
<form method= "POST" action ="ajoutTournois16ans.php" enctype= "multipart/form-data">
	<table >
		<tr>
			<td> <?php echo ($cl['MATRICULE'])?>)</td> 
			
			<input type="hidden" name="Rien" value="<?php echo ($cl['MATRICULE'])?>)" />
			<td><a href='tournois16ans.php?id=<?php echo $cl['MATRICULE'];?>'><?php echo ($cl['NOM'])?></a></td>
			<input type="hidden" name="nom" value="<?php echo ($cl['NOM'])?>" />
			<td> <?php echo ($cl['PRENOM'])?></td>
			<!-- <td><input type="text" name="score" value="" placeholder="Score obtenu"></td> -->
		</tr>
	</table>


<?php 
/*

$score=$_POST['score'];
$dateTournois =  date('Y-m-d');
$IdTournois='1';
$MatTournois=$_POST['Rien'];
$reqScore = "insert into participe (MATRICULE,ID_TOURNOIS,DATE_TOURNOIS,SCORE) values('$MatTournois','$IdTournois','$dateTournois','$score')";
mysql_query($reqScore);
header ("location:saisieTournois.php");*/

}  ?></fieldset> <!-- <input type=submit name="save" class="savebutton" value="EnregistrerOk"> --></form>
</td><td style="vertical-align: initial;">
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
	
<form method= "POST" action ="ajoutTournois16ans.php" enctype= "multipart/form-data">
<input type="hidden" name="mat" value="<?php echo "$m";?>">
<!-- <input type="hidden" name="Rien" value="<?php echo ($cl['MATRICULE'])?>)" /> -->
<input type="number" name="score" value=""  min="1" max="4" onkeypress='only_numeric(event)'placeholder="Score" required autofocus>
<input type="date" name="dateScore" required autofocus>
<input type="submit" name="ajouter" value="OK"> 


</form>

<?php

//$x=mysql_num_rows() pour calculer le nombre de foix k le client apparaisse 

}else{
	echo "Veuillez selectioner le nom pour ajouter le score corespondant";
}




?>
</fieldset>


</td></tr>
</table>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

</div><?php include ("pied.php");?>
</body>
</html>