<?php
require_once("connection.php");
$mc="Saisissez le nom chercher";
if(isset($_POST['motcle'])) 
{
	$mc=$_POST['motcle'];
}
$req="select * from client where NOM like '%$mc%' ORDER BY matricule ASC LIMIT 10";
$rSet=mysql_query($req)or die(mysql_error());
?>
 <!DOCTYPE html>
<html>
 <head>
 	<title>Impression de la carte du Client</title>
 	<meta charset="UTF-8">	
 	<link rel="stylesheet" type="text/css" href="css/menu_admin.css" />
 </head>
  <body>
<?php include ("entete_admin.php");?>
<div class="content">
<!-- Pour la recherche -->
  	<fieldset>
		<legend><b><i>Nom du membre</i></b> </legend>
  			<form method="POST" action="imprimer_carte.php">
  				Mot Clé : <input type= "text" name= "motcle" placeholder="Nom plz" required autofocus>
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
			<td> <?php echo $cl['MATRICULE']?></td>
			<td> <?php echo ($cl['NOM'])?></td>
			<td> <?php echo ($cl['PRENOM'])?></td>
			<td> <?php echo ($cl['SEXE'])?></td>
			<td> <?php echo ($cl['NATIONALITE'])?></td>
			<td><img src="images/<?php echo ($cl['PHOTO'])?>"width="150px";height="120px";</td>
			<!-- <td><a href ="supprimerClient.php?matricule=<?php echo $cl['MATRICULE']?>">Supprimer</a> </td> -->
			<!-- <td><a id="lien3" href="editerCarte.php?matricule=<?php echo $cl['MATRICULE']?>">
				<div class="editebutton"><button type="button" value="Imprimer"> Imprimer </button></a></div></td> -->
			
			<td><button type="button" onclick = "window.location= 'editerCarte.php?matricule=<?php echo $cl['MATRICULE']?>'"> 
			Imprimer </button></td>
</div>

			<!-- <td><a href ="editerCarte.php?matricule=<?php echo $cl['MATRICULE']?>"><div class="editebutton">Imprimer</a> </td></div> -->
		</tr> 
	<?php }  ?> 
  </table>
   </div>
 </body><?php include ("pied.php");?>
</html>
