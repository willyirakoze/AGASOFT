<meta charset="UTF-8">
<?php
require_once("connection.php");

$matricule = $_POST['matricule'];
$recu = $_POST['recu'];
$recupiscine = $_POST['recupiscine'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
/*$abonnement = $_POST['abonné'];*/
$sexe = $_POST['sexe'];
$email = $_POST['e_mail'];
$nationalite = $_POST['nationalite'];
$nomPhoto= $_FILES['photo']['name']; 
$file_tmp_name= $_FILES['photo']['tmp_name'];
/*$Age1 = mysql_real_escape_string(htmlspecialchars($_POST['datey']));
$Age2 = mysql_real_escape_string(htmlspecialchars($_POST['datem']));
$Age3 = mysql_real_escape_string(htmlspecialchars($_POST['datej']));
  $Age = ("$Age1".','."$Age2".','."$Age3");*/

$nee = $_POST['datenaissance'];

move_uploaded_file($file_tmp_name, "./images/$nomPhoto");
$req="update client set NOM='$nom', PRENOM='$prenom', SEXE='$sexe',EMAIL='$email', DATE_NAISSANCE='$nee',PHOTO='$nomPhoto',
NATIONALITE='$nationalite', DATE_NAISSANCE='$nee', PHOTO='$nomPhoto' where MATRICULE=$matricule";
mysql_query($req)or die(mysql_error());
echo "<script>

alert('Client mis à jour avec succes!!!') ;

</script>";
require_once("afficherClientRec.php"); //un forword
?>