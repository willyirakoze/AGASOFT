<?php
require_once("connection.php");
$mc="chercher";
if(isset($_POST['motcle'])) 
{
	$mc=$_POST['motcle'];
}
/*$req="select * from client where NOM like '%$mc%' ORDER BY matricule ASC LIMIT 10";*/
$req="select * from client where NOM like '%$mc%' ORDER BY matricule ASC";
$rSet=mysql_query($req)or die(mysql_error());

?>
 <!DOCTYPE html>
<html>
 <head>
 	<title>Editer Client</title>
 	<meta charset="UTF-8">	
 	<link rel="stylesheet" type="text/css" href="css/menu_admin.css" />
 </head>
  <body>
<?php include ("entete_rec.php");?>
<div class="content">
<!-- Pour la recherche -->
  	<fieldset>
		<legend><b><i>Recherche</i></b> </legend>
  			<form method="POST" action="chercherAbonnementRec.php">
  				Mot Clé : <input type= "text" name= "motcle" placeholder="Nom plz" required autofocus>
  				<input type= "submit" value= "Chercher"class="chercherbutton">
  			</form>
  	</fieldset>

   <table border=""> 
 	
	<?php while($cl=mysql_fetch_assoc($rSet)) {?>
		<tr>
			<td> <?php echo $cl['MATRICULE']?></td>
			<td> <?php echo ($cl['NOM'])?></td>
			<td> <?php echo ($cl['PRENOM'])?></td>
			<td> <?php echo ($cl['SEXE'])?></td>
			<td> <?php echo ($cl['NATIONALITE'])?></td>
			<td><img src="images/<?php echo ($cl['PHOTO'])?>"width="150px";height="120px";</td>
			<!-- <td><a href ="supprimerClient.php?matricule=<?php echo $cl['MATRICULE']?>">Supprimer</a> </td> -->

			<td><button type="button" onclick = "window.location= 'editeAbonnementrec.php?matricule=<?php echo $cl['MATRICULE']?>'"> 
			Editer </button></td>
			<!-- <td><a href ="editeClient.php?matricule=<?php echo $cl['MATRICULE']?>"><div class="editebutton">Editer</a> </td></div> -->
		</tr> 
	<?php }  ?> 
  </table>
   </div>
 </body><?php include ("pied.php");?>
</html>
