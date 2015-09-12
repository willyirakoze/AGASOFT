<!DOCTYPE html>
<html >

<head>
<meta charset="UTF-8">
  <title>Ajouter abonnement </title>

<link rel="stylesheet" type="text/css" href="css/menu_admin.css" />

</head>
<body>
  <?php include ("entete_rec.php");?>
  <div class="content">
<fieldset>
<legend><b><i>Tous les abonnés</i></b> </legend>
  <form method= "POST" action ="" enctype= "multipart/form-data">
    <table>
      
      <tr>
        <td>Mensuel &nbsp&nbsp:</td>
        <td><button type="button" onclick = "window.location='mensuelEnfantrec.php'" name="mensuelEnfant"> 
                Enfant 
            </button>
              &nbsp&nbsp&nbsp
            <button type="button" onclick = "window.location= 'mensuelAdultrec.php'" name="mensuelAdult"> Adulte </button></td>
      </tr>

      <tr>
        <td>Trimestriel:</td>
        <td><button type="button" onclick = "window.location= 'trimestreEnfantrec.php'" name="trimestreEnfant"> 
                Enfant 
            </button>
                &nbsp&nbsp&nbsp
            <button type="button" onclick = "window.location= 'trimestreAdultrec.php'" name="trimestreAdult"> Adulte </button></td>
      </tr>

      <tr>
        <td>Semestriel:</td>
        <td><button type="button" onclick = "window.location= 'semestreEnfantrec.php'" name="semestreEnfant"> 
                Enfant 
            </button>
              &nbsp&nbsp&nbsp
            <button type="button" onclick = "window.location= 'semestreAdultrec.php'" name="semestreAdult"> Adulte </button></td>
      </tr>

      <tr>
        <td>Annuel &nbsp&nbsp&nbsp&nbsp&nbsp:</td>
        <td><button type="button" onclick = "window.location= 'annuelEnfantrec.php'" name="annuelEnfant"> 
                Enfant 
            </button>
              &nbsp&nbsp&nbsp
            <button type="button" onclick = "window.location= 'annuelAdultrec.php'" name="annuelAdult"> Adulte </button></td>
      </tr>


    </table>
</tr>


</form>
</fieldset>
</div><?php include ("pied.php");?>
</body>
</html>
