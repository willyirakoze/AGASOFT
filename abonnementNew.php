<!DOCTYPE html>
<html >

<head>
<meta charset="UTF-8">
  <title>Ajouter abonnement </title>

<link rel="stylesheet" type="text/css" href="css/menu_admin.css" />

</head>
<body>
  <?php include ("entete_admin.php");?>
  <div class="content">
<fieldset>
<legend><b><i>Tous les abonnés</i></b> </legend>
  <form method= "POST" action ="" enctype= "multipart/form-data">
    <table>
      
      <tr>
        <td>Mensuel &nbsp&nbsp:</td>
        <td><button type="button" onclick = "window.location='mensuelEnfant.php'" name="mensuelEnfant"> 
                Enfant 
            </button>
              &nbsp&nbsp&nbsp
            <button type="button" onclick = "window.location= 'mensuelAdult.php'" name="mensuelAdult"> Adulte </button></td>
      </tr>

      <tr>
        <td>Trimestriel:</td>
        <td><button type="button" onclick = "window.location= 'trimestreEnfant.php'" name="trimestreEnfant"> 
                Enfant 
            </button>
                &nbsp&nbsp&nbsp
            <button type="button" onclick = "window.location= 'trimestreAdult.php'" name="trimestreAdult"> Adulte </button></td>
      </tr>

      <tr>
        <td>Semestriel:</td>
        <td><button type="button" onclick = "window.location= 'semestreEnfant.php'" name="semestreEnfant"> 
                Enfant 
            </button>
              &nbsp&nbsp&nbsp
            <button type="button" onclick = "window.location= 'semestreAdult.php'" name="semestreAdult"> Adulte </button></td>
      </tr>

      <tr>
        <td>Annuel &nbsp&nbsp&nbsp&nbsp&nbsp:</td>
        <td><button type="button" onclick = "window.location= 'annuelEnfant.php'" name="annuelEnfant"> 
                Enfant 
            </button>
              &nbsp&nbsp&nbsp
            <button type="button" onclick = "window.location= 'annuelAdult.php'" name="annuelAdult"> Adulte </button></td>
      </tr>


    </table>
</tr>


</form>
</fieldset>
</div><?php include ("pied.php");?>
</body>
</html>
