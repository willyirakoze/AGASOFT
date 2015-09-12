<?php
require_once("connection.php");
$mc="Saisissez le matricule chercher";
if(isset($_POST['motcle'])) 
{
	$mc=$_POST['motcle'];
}
$req="select * from Employe where NOM like '%$mc%' ORDER BY MATRICULE_EMPLOYE ASC LIMIT 10";
/*$req="select * from employé where MATRICULE_EMPLOYE like '%$mc%'";*/
$rSet=mysql_query($req)or die(mysql_error());

?>
 <!DOCTYPE html>
<html>
 <head>
 	<title>Editer Employé</title>
 	<meta charset="UTF-8">	
 	<link rel="stylesheet" type="text/css" href="css/menu_admin.css" />
 </head>
  <body>
<?php include ("entete_admin.php");?>
<div class="content">
<!-- Pour la recherche -->
  	<fieldset>
		<legend><b><i>Recherche</i></b> </legend>
  			<form method="POST" action="chercherEmploye.php">
  				Mot Clé : <input type= "text" name= "motcle" placeholder="Nom de l'employé" required autofocus>
  				<input type= "submit" value= "Chercher"class="chercherbutton">
  			</form>
  	</fieldset>

   <table border=""> 
 	<!-- <tr> 
 		<th>Matricule</th>
 		<th> Nom</th>
 		<th>Prenom</th>
 		<th>Sexe</th>
 		<th>Nationalite</th>
 		<th>Photo</th>

 	</tr> -->
	<?php while($cl=mysql_fetch_assoc($rSet)) {?>
		<tr>
			<td> <?php echo $cl['MATRICULE_EMPLOYE']?></td>
			<td> <?php echo ($cl['NOM'])?></td>
			<td> <?php echo ($cl['PRENOM'])?></td>
			<td> <?php echo ($cl['QUALIFICATION'])?></td>
			<td> <?php echo ($cl['ADRESSE'])?></td>
			<td> <?php echo ($cl['TELEPHONE'])?></td>
			<td> <?php echo ($cl['SEXE'])?></td>
			<td> <?php echo ($cl['NATIONALITE'])?></td>
			<td><img src="images/employe/<?php echo ($cl['PHOTO'])?>"width="150px";height="120px";</td>
			<!-- <td><a href ="supprimerClient.php?matricule=<?php echo $cl['MATRICULE']?>">Supprimer</a> </td> -->

			<td><button type="button" onclick = "window.location= 'editeEmploye.php?matricule=<?php echo $cl['MATRICULE_EMPLOYE']?>'"> 
			Editer </button></td>
			<!-- <td><a href ="editeEmploye.php?matricule=<?php echo $cl['MATRICULE_EMPLOYE']?>"><div class="editebutton">Editer</a> </td></div> -->
		</tr> 
	<?php }  ?> 
  </table>
   </div>
 </body><?php include ("pied.php");?>
</html>
