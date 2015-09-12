<meta charset="UTF-8">
<?php
require_once("connection.php");

$matricule = $_POST['matricule'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$qualification = $_POST['qualification'];
$adresse = $_POST['adresse'];
$telephone = $_POST['telephone'];
$sexe = $_POST['sexe'];
$fonction = $_POST['fonction'];
$nationalite = $_POST['nationalite'];
$nomPhoto= $_FILES['photo']['name']; 
$file_tmp_name= $_FILES['photo']['tmp_name'];
/*$Age1 = mysql_real_escape_string(htmlspecialchars($_POST['datey']));
$Age2 = mysql_real_escape_string(htmlspecialchars($_POST['datem']));
$Age3 = mysql_real_escape_string(htmlspecialchars($_POST['datej']));
  $Age = ("$Age1".','."$Age2".','."$Age3");*/


move_uploaded_file($file_tmp_name, "./images/employe/$nomPhoto");
$req="update employe set  QUALIFICATION='$qualification',ADRESSE='$adresse',FONCTION='$fonction',TELEPHONE='$telephone',
SEXE='$sexe', NATIONALITE='$nationalite', PHOTO='$nomPhoto' where MATRICULE_EMPLOYE=$matricule";
mysql_query($req)or die(mysql_error());

echo "<script>

alert('Employé mis à jour avec succes!!!') ;

</script>";

require_once("afficherEmploye.php"); //un forword NOM='$nom', PRENOM='$prenom',
?>