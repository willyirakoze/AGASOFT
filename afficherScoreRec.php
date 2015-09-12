<html>
<meta charset="UTF-8">
<?php include ("entete_rec.php");?>
  <header>


  </header>
 
<body>

 <div class="content">

 	<!-- **************************************************************************************************************** -->
 	<table border='1';><tr><td>
	<fieldset style="width: 345px;">
<legend><b><i>Consultation des résultats pour les catégories suivantes:</i></b></legend>

<form method= "POST" action ="ajoutTournois12ansrec.php" enctype= "multipart/form-data">
	<table ><br> <br>
		<tr>
        <td>Petit: [8-12ans]</td>
        <td><button type="button" onclick = "window.location='Score12ansGarcorec.php'" name="12ans"> 
                Garçon 
            </button>
              &nbsp&nbsp&nbsp&nbsp
            <button type="button" onclick = "window.location= 'Score12ansFillerec.php'" name="12ans">Fille </button></td>
      </tr>

       <tr>
        <td>Moyen: [13-16ans]</td>
        <td><button type="button" onclick = "window.location= 'Score16ansrec.php'" name="16ans"> 
                Garçon 
            </button>
                &nbsp&nbsp&nbsp&nbsp
            <button type="button" onclick = "window.location= 'Score16ansFillerec.php'" name="16ans">Fille </button></td>
      </tr>

      <tr>
        <td>Grand: [17-20ans]</td>
        <td><button type="button" onclick = "window.location= 'Score20ansrec.php'" name="20ans"> 
                Garçon 
            </button>
              &nbsp&nbsp&nbsp&nbsp
            <button type="button" onclick = "window.location= 'Score20ansFillerec.php'" name="20ans"> Fille </button></td>
      </tr>
	</table>


 

</fieldset> <!-- <input type=submit name="save" class="savebutton" value="EnregistrerOk"> --></form>
</td><!-- <td style="vertical-align: initial;"> -->
<!-- formulaire d'ajout du score -->
<!-- <fieldset><legend>Classement des participants:</legend> -->


<!-- </form>
</fieldset> -->


</td></tr>
</table>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

</div><?php include ("pied.php");?>
</body>
</html>
