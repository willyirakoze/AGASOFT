<?php
require_once("connection.php");
$matricule_employe=0;
$matricule_employe=$_GET['matricule'];
$req= "select * from employe where MATRICULE_EMPLOYE='$matricule_employe'";
$rs=mysql_query($req) or die(mysql_error());
$cl=mysql_fetch_assoc($rs);

$reqempl= "select * from travaille where MATRICULE_EMPLOYE='$matricule_employe'";
$rsempl=mysql_query($reqempl) or die(mysql_error());
$clempl=mysql_fetch_assoc($rsempl);
?> 

<html >

<head>
<meta charset="UTF-8">
	<title>Editer employé </title>
  <link href="css/menu_admin.css" rel="stylesheet" type="text/css" />

</head>
<body> 
  <?php include ("entete_admin.php");?>



<div class="content">
  <h1 class="titre" align="center"> <i>Editer Employe</i> </h1>
<fieldset>
<legend><b><i>Editer Employe</i></b> </legend>
  <form method= "POST" action ="modifierEmploye.php" enctype= "multipart/form-data">
    <table>
      <tr>
        <td>Matricule </td>
        <input type="hidden" name="matricule" size="25"  value="<?php echo ($cl['MATRICULE_EMPLOYE'])?>" required autofocus>
        <td>:<?php echo ($cl['MATRICULE_EMPLOYE'])?></td> 
      </tr>
      
      <tr>
        <td>Nom </td>
        <input type="hidden" name="nom" size="25" maxlength="20" value="<?php echo ($cl['NOM'])?>">
        <td>:<?php echo ($cl['NOM'])?></td>
      </tr>
      <tr>
        <td>Prénom </td>
        <input type="hidden" name="prenom" size="25" maxlength="20" value="<?php echo ($cl['PRENOM'])?>">
        <td>:<?php echo ($cl['PRENOM'])?></td>
      </tr>

      <tr>
        <td>Qualification </td>
        <td>:<input type="text" name="qualification" size="25" maxlength="20" value="<?php echo ($cl['QUALIFICATION'])?>"</td>
      </tr>
      <tr>
        <td>Adresse </td>
        <td>:<input type="text" name="adresse" size="25" maxlength="20" value="<?php echo ($cl['ADRESSE'])?>"</td>
      </tr>

      <tr>
        <td>Téléphone </td>
        <td>:<input type="text" name="telephone" size="25" maxlength="12" value="<?php echo ($cl['TELEPHONE'])?>"</td>
      </tr>
      <tr>
        <td>Fonction</td>
        <td>:
          <select name="fonction" >
              <option value="maitre"><?php echo ($cl['FONCTION'])?> </option> 
              <option value="Maitre nageur">Maître nageur</option>
              <option value="Planton"> Planton</option>
              <option value="Gardinier">Gardinier </option>
              <option value="Nettoyeur"> Nettoyeur</option>
          </select>
      </tr>

      <tr>
          <td> Sexe </td>
          <td>: <input type="radio" name="sexe" value="Masculin" checked>Masculin
            &nbsp
          <input type="radio" name="sexe" value="Feminin">Feminin </td>
      </tr>  
      <tr>
          <td> Nationalite </td>
           <td>: <input type="radio" name="nationalite" value="Burundais" checked="checked">
          Burundais
          <input type="radio" name="nationalite" value="Etranger" > Etranger </td>
      </tr>
<tr>
  <td>Dat_Embch</td>
  <input type="hidden" name="date_embauche" value="<?php echo ($clempl['DATE_EMBAUCHE'])?>">
  <td>: <?php echo ($clempl['DATE_EMBAUCHE'])?></td>
</tr>


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
  <td > Photo  : </td>
  <td>
  <img src= "images/employe/<?php echo($cl['PHOTO'])?>"width="150px";height="120px">
  <input type="file" name="photo"></td>
</tr>

<tr>

    <td ><img src="outils/button_ok.png" width="10" height="10" /><input name="save" class="savebutton" type=submit value="Enregistrer">
         <input name="reset" type=reset value="Initialiser" class="savebutton">
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



<!-- <tr>
  <td>Dat_embch</td> -->
    <!-- umwaka -->
  <!--  <td>

  <table class="dateok"><tr><td>
   <select name="datey" required autofocus>
    <?php 
      /*for($i = 2000;$i<= (intval(date("Y")));$i++)
      {
        echo "<option value=".$i.">".$i."</option>/";
      }*/
    ?>
   </select></td>

 ukwezi /-->
<!-- <td>
   <select name="datem" required autofocus> 
    <?php 
    /*for($a = 1;$a<=12;$a++)
    {
       echo "<option value=".$a.">".$a."</option>";
    }
    ?>
  </select>
</td>
<td>
 <!-- umunsi /-->
  <select name="datej">
    <?php 
 /*if ((((intval(date("m")))%2)==0)&&((intval(date("m")))<=7))//verfier si le mois a des jr paire et inferieur à7
  {
    for($ib = 1;$ib<= 31;$ib++)
   {
    echo "<option value=".$ib.">".$ib."</option>";
   }

  }elseif((((intval(date("m")))%2)!=0)&&((intval(date("m")))<=7))//verfier si le mois a des jr inpaire et inferieur à7
{
   for($ib = 1;$ib<= 31;$ib++)
  {
    echo "<option value=".$ib.">".$ib."</option>";
  }
}*/

/*-----------generation du clandrier-------------*/

  /*if ((intval(date("m"))==2))// voir si ce le mois fevrier
   {
    for($ib = 1;$ib<= 29;$ib++)//genere le jours pour le mois fevrier
     {
      echo "<option value=".$ib.">".$ib."</option>";
     }
   }
if ((((intval(date("m")))%2)==0)&&((intval(date("m")))>7)&&((intval(date("m"))!=2)) )//verfier si le mois a des jr paire et supperieur à7
{
  for($ib = 1;$ib<= 31;$ib++)
{

  echo "<option value=".$ib.">".$ib."</option>";
}

}elseif((((intval(date("m")))%2)!=0)&&((intval(date("m")))>7))//verfier si le mois a des jr inpaire et supperieur à7
{
   for($ib = 1;$ib<= 30;$ib++)
{

  echo "<option value=".$ib.">".$ib."</option>";
}
}*/
?>

 </select></tr></table></td>
</tr> -->
