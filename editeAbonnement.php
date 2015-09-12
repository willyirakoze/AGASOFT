<?php
require_once("connection.php");
$matricule=0;
$matricule=$_GET['matricule'];
$req= "select * from client where MATRICULE='$matricule'";
$rs=mysql_query($req) or die(mysql_error());
$cl=mysql_fetch_assoc($rs);

$reqpaie= "select * from paie where MATRICULE='$matricule'";
$rspaie=mysql_query($reqpaie) or die(mysql_error());
$clpaie=mysql_fetch_assoc($rspaie);


/*$paie= "select TYPE_ABONNEMENT from paie where MATRICULE='$matricule'";
$rsp=mysql_query($paie) or die(mysql_error());
$clp=mysql_fetch_assoc($rsp);*/

?> 

<!-- Affichage -->

<!DOCTYPE html>
<html >

<head>
<meta charset="UTF-8">
	<title>Editer abonnement </title>
  <link href="css/menu_admin.css" rel="stylesheet" type="text/css" />

</head>
<body> 
  <?php include ("entete_admin.php");?>
  <div class="content">
    <h1 class="titre" align="center"> <i> Abonnement</i> </h1>
<fieldset>
<legend><b><i>Editer abonnement</i></b> </legend>
	<form method= "POST" action ="modifierAbonnement.php" enctype= "multipart/form-data">
		<table>
			<tr>
				<td>Matricule</td>
        <td>:<?php echo ($cl['MATRICULE'])?></td>
         <td><input type="hidden" name="matricule" size="25"  value="<?php echo ($cl['MATRICULE'])?>"></td>
				<!-- <td><?php echo ($cl['MATRICULE'])?></td> --> 
			</tr>
		  
			<tr>
				<td>Nom </td>
        <input type="hidden" name="nom" size="25" maxlength="20" value="" placeholder="Nom">
				<td>:<?php echo ($cl['NOM'])?></td>
			</tr>
			<tr>
				<td>Prénom </td>
				<td>:<?php echo ($cl['PRENOM'])?></td>
			</tr>

      <tr>
  <td>Née</td>
  <input type="hidden" name="datenaissance">
  <td>:<?php echo ($cl['DATE_NAISSANCE'])?></td>
</tr>
<tr>
  <td > Photo  </td>
  <td>:
  <img src= "images/<?php echo($cl['PHOTO'])?>"width="140px";height="100px">
  </td>
</tr>
 <tr>
<td>Type d'abonnement </td>
<td>
<?php

    $sqlmat = mysql_query("SELECT * FROM abonnement ORDER BY ID_ABONNEMENT ASC");
?>
<select name="abonné">
            <option value=""><?php echo ($clpaie['ID_ABONNEMENT'])?>)</option>
         <?php while($row1 = mysql_fetch_array($sqlmat)) 
           {
            echo '<option  value="'.$row1['ID_ABONNEMENT'].'" >'.$row1['ID_ABONNEMENT'].')'.$row1['TYPE_ABONNEMENT'].'_'.$row1['CATEGORIE'].'</option>'; 
             }
         ?>
  </select>
<td><fieldset>
<legend><b><i>Valable:</i></b> </legend>
  Du<input type="date" name="datedebut" value="<?php echo ($clpaie['DATE_DEBUT'])?>">
  -au-<input type="date" name="datefin" value="<?php echo ($clpaie['DATE_FIN'])?>">
</fieldset></td>
</td>
</tr>
<tr>
    <td >
      <input name="submit" type=submit value="Enregistrer">
    </td>
    </table>
</tr>
</form>
</fieldset>
</div><?php include ("pied.php");?>
</body>
</html>


<!-- Fermeture de la connection de la Base de Donne -->
<?php
mysql_free_result($rs);
mysql_close($conn);
?>
