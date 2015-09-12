<!DOCTYPE html>
<html >

<head>
<meta charset="UTF-8">
	<title>Saisie employé </title>

<link rel="stylesheet" type="text/css" href="css/menu_admin.css" />

</head>
<body>
  <?php include ("entete_admin.php");?>
  <div class="content">
	<h1 class="titre" align="center"> <i>Nouveau employé</i> </h1>
<fieldset>
<legend><b><i>Nouveau employé</i></b> </legend>
	<form method= "POST" action ="ajouterEmploye.php" enctype= "multipart/form-data">
		<table>
			<tr>
				<td>Matricule  :</td>
				<td><input type="text" name="matricule" size="25"  value="" placeholder="Matricule" required autofocus></td>
			</tr>
		  
			<tr>
				<td>Nom  :</td>
				<td><input type="text" name="nom" size="25" maxlength="20" value="" placeholder="Nom" required autofocus></td>
			</tr>
			<tr>
				<td>Prénom  :</td>
				<td><input type="text" name="prenom" size="25" maxlength="20" value="" placeholder="Prénom" required autofocus></td>
			</tr>

      <tr>
        <td>Qualification  :</td>
        <td><input type="text" name="qualification" size="25" maxlength="20" value="" placeholder="Qualification" required autofocus></td>
      </tr>
      <tr>
        <td>Adresse  :</td>
        <td><input type="text" name="adresse" size="25" maxlength="20" value="" placeholder="Adresse" required autofocus></td>
      </tr>

      <tr>
        <td>Téléphone  :</td>
        <td><input type="tel" name="telephone" size="25" maxlength="15" value="" placeholder="+257....." required autofocus></td>
      </tr>
    
    <tr>
        <td>Fonction  :</td>
        <td>
          <select name="fonction" >
              <option value="maitre"></option>
              <option value="Maitre nageur">Maître nageur</option>
              <option value="Planton"> Planton</option>
              <option value="Gardinier">Gardinier </option>
              <option value="Nettoyeur"> Nettoyeur</option>
          </select>
      </tr>

			<tr>
        	<td> Sexe : </td>
        	<td><input type="radio" name="sexe" value="Masculin" checked>Masculin
            &nbsp
          <input type="radio" name="sexe" value="Feminin">Feminin </td>
      </tr>  
			<tr>
        	<td> Nationnalite :</td>
       		 <td><input type="radio" name="nationalite" value="Burundais" checked="checked">
          Burundais
          <input type="radio" name="nationalite" value="Etranger" > Etranger </td>
      </tr>

<tr>
  <td>Dat_Embch:</td>
  <td><input type="date" name="date_embauche" required autofocus></td>
</tr>


<tr>
<td>Section &nbsp:</td>
<td>
<?php
include_once('connection.php');

    $sqlmat = mysql_query("SELECT * FROM section ORDER BY LIBELLE ASC");
?>
<select name="section">
            <option value=""></option>
         <?php while($row1 = mysql_fetch_array($sqlmat)) 
           {
            echo '<option  value="'.$row1['ID_SECTION'].'" >'.$row1['LIBELLE'].'</option>'; 
             }
         ?>
  </select>
</td>
</tr>
<tr>
  <td > Photo  : </td>
  <td><input type="file" name="photo"></td>
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




<!-- <tr>
  <td>Dat_embch:</td>
     umwaka -->
   <!-- <td>

  <table class="dateok"><tr><td>
   <select name="datey" required autofocus> -->
    <?php 
      /*for($i = 2000;$i<= (intval(date("Y")));$i++)
      {
        echo "<option value=".$i.">".$i."</option>/";
      }*/
    ?>
   <!-- </select></td> -->

<!-- ukwezi /-->
<!-- <td>
   <select name="datem" required autofocus> -->
    <?php 
    /*for($a = 1;$a<=12;$a++)
    {
       echo "<option value=".$a.">".$a."</option>";
    }*/
    ?>
  <!-- </select>
</td>
<td> -->
 <!-- umunsi /-->
  <!-- <select name="datej"> -->
    <?php 
 /*if ((((intval(date("m")))%2)==0)&&((intval(date("m")))<=7))//verfier si le mois a des jr paire et inferieur à7
  {
    for($ib = 1;$ib<= 30;$ib++)
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

<!-- </select></tr></table></td>
</tr> -->
