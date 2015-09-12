<?php
require_once("connection.php");
$matricule=0;
$matricule=$_GET['matricule'];
$req= "select * from client where MATRICULE='$matricule'";
$rs=mysql_query($req) or die(mysql_error());
$cl=mysql_fetch_assoc($rs);

/*$paie= "select TYPE_ABONNEMENT from paie where MATRICULE='$matricule'";
$rsp=mysql_query($paie) or die(mysql_error());
$clp=mysql_fetch_assoc($rsp);*/

?> 

<!-- Affichage -->

<!DOCTYPE html>
<html >

<head>
<meta charset="UTF-8">
	<title>Editer client </title>
  <link href="css/menu_admin.css" rel="stylesheet" type="text/css" />

</head>
<body> 
  <?php include ("entete_admin.php");?>
  <div class="content">
    <h1 class="titre" align="center"> <i> Client</i> </h1>
<fieldset>
<legend><b><i>Editer client</i></b> </legend>
	<form method= "POST" action ="modifierClient.php" enctype= "multipart/form-data">
		<table>
			<tr>
				<td>Matricule</td>
        <input type="hidden" name="matricule" size="25"  value="<?php echo ($cl['MATRICULE'])?>" required autofocus>
				<td>:<?php echo ($cl['MATRICULE'])?></td> 
			</tr>
		  <tr>
				<td>Récu Entente </td>
        <input type="hidden" name="recu" size="25" maxlength="20" value="<?php echo ($cl['RECU_ENTENTE'])?>" required autofocus>
				<td>:<?php echo ($cl['RECU_ENTENTE'])?> </td>
			</tr>
      <tr>
        <td>Récu Piscine </td>
        <input type="hidden" name="recupiscine" size="25" maxlength="20" value="<?php echo ($cl['RECU_PISCINE'])?>">
        <td>:<?php echo ($cl['RECU_PISCINE'])?> </td>
      </tr>
			<tr>
				<td>Nom </td>
				<td>:<input type="text" name="nom" size="25" maxlength="20" value="<?php echo ($cl['NOM'])?>"></td>
			</tr>
			<tr>
				<td>Prénom</td>
				<td> :<input type="text" name="prenom" size="25" maxlength="20" value="<?php echo ($cl['PRENOM'])?>"></td>
			</tr>

      <tr>
        <td>E_Mail</td>
        <td>:<input type="text" name="e_mail" size="25" maxlength="20" value="<?php echo ($cl['EMAIL'])?>"></td>
      </tr>

      <tr>
  <td>Née</td>
  <td> :<input type="date" name="datenaissance"value="<?php echo ($cl['DATE_NAISSANCE'])?>"></td>
</tr>
<!-- <tr>
<td>Type d'abonnement :</td>
<td>
<?php
include_once('connection.php');

    $sqlmat = mysql_query("SELECT * FROM abonnement ORDER BY TYPE_ABONNEMENT ASC");
?>
<select name="abonné">
            <option value=""></option>
         <?php while($row1 = mysql_fetch_array($sqlmat)) 
           {
            echo '<option  value="'.$row1['ID_ABONNEMENT'].'" >'.$row1['TYPE_ABONNEMENT'].'_'.$row1['CATEGORIE'].'</option>'; 
             }
         ?>
  </select>

</tr> -->
      <!-- <tr>
<td>Type d'abonnement &nbsp:</td>
<td>
<?php
    $sqlmat = mysql_query("SELECT * FROM abonnement ORDER BY ID_ABONNEMENT ASC");
?>
<select name="abonné">
            <option value="<?php echo ($clp['TYPE_ABONNEMENT'])?>"></option>
         <?php while($row1 = mysql_fetch_array($sqlmat)) 
           {
            echo '<option  value="'.$row1['TYPE_ABONNEMENT'].'" >'.$row1['TYPE_ABONNEMENT'].'_'.$row1['CATEGORIE'].'</option>'; 
             }
         ?>
  </select>
</td>
</tr> -->

<tr>
<td>Section</td>
<td>:
<?php
    $sqlmat = mysql_query("SELECT * FROM section ORDER BY LIBELLE ASC");
?>
<select name="section">
            <!-- <option value=""><?php echo ($cl['SECTION'])?></option> -->
         <?php while($row1 = mysql_fetch_array($sqlmat)) 
           {
            echo '<option  value="'.$row1['LIBELLE'].'" >'.$row1['LIBELLE'].'</option>'; 
             }
         ?>
  </select>
</td>
</tr>
			<tr>
        	<td> Sexe  </td>
        	<td>:<input type="radio" name="sexe" value="Masculin" checked>Masculin
          <input type="radio" name="sexe" value="Feminin">Feminin </td>
      </tr>  
			
			<tr>
        	<td> Nationnalite</td>
       		 <td> :<input type="radio" name="nationalite" value="Burundais" checked>Burundais
          <input type="radio" name="nationalite" value="Etranger" > Etranger </td>
      </tr>

<tr>
  <td > Photo </td>
  <td>:
  <img src= "images/<?php echo($cl['PHOTO'])?>"width="150px";height="120px">
  <input type="file" name="photo"></td>
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
