<meta charset="UTF-8">
<?php
require_once("connection.php");

$matricule = $_POST['matricule'];
$recu = $_POST['recu'];
$recupiscine = $_POST['recupiscine'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$sexe = $_POST['sexe'];
$email = $_POST['e_mail'];
$abonnement = $_POST['abonné'];
$section = $_POST['section'];
$nationalite = $_POST['nationalite'];
$nomPhoto= $_FILES['photo']['name']; 
$file_tmp_name= $_FILES['photo']['tmp_name'];
$nee = $_POST['datenaissance']; 
$date_debut = $_POST['datedebut'];
$date_fin = $_POST['datefin'];
$date_enregistre=date('Y-m-d');
$moins5ans = date('Y-m-d',strtotime("-5 years"));
$moins15ans= date('Y-m-d',strtotime("-15 years"));
move_uploaded_file($file_tmp_name, "./images/$nomPhoto");



if ($nee>=$moins15ans && $nee<=$moins5ans)
{
 /*Pour enfant*/	
 if ((isset($_POST['abonné']) && ($_POST['abonné']==7))||(isset($_POST['abonné']) && ($_POST['abonné']==5)) ||(isset($_POST['abonné']) && ($_POST['abonné']==3)) ||(isset($_POST['abonné']) && ($_POST['abonné']==1))) {


/*Si l'id abonnement=1 donc mensuel*/
	if (isset($_POST['abonné']) && ($_POST['abonné']==1)) //si type abonnement est mansuel enfant
	{
		$k=((strtotime($date_fin))-(strtotime($date_debut)))/86400;
		if ($k>=28 && $k<32) //si l'inerval est de 30jrs
		{
			/*echo "Cotisation valable pour " .$k . "Jours ";*/
			# puis insertion de donne de l'abonnement mansuel
			$req = "insert into client(MATRICULE, RECU_ENTENTE, RECU_PISCINE, NOM, PRENOM, SEXE, EMAIL, NATIONALITE,DATE_NAISSANCE, PHOTO)
			values('$matricule', $recu,$recupiscine,'$nom','$prenom','$sexe', '$email','$nationalite','$nee','$nomPhoto')";
			mysql_query($req) or (die (mysql_error()));
			$paie= "insert into paie(MATRICULE,ID_ABONNEMENT,DATE_DEBUT, DATE_FIN)values('$matricule','$abonnement','$date_debut','$date_fin')";
			mysql_query($paie) or (die (mysql_error()));
			$inscri= "insert into inscription(ID_SECTION, MATRICULE,DATE_INSCRIPTION)values('$section','$matricule','$date_enregistre')";
			mysql_query($inscri) or (die (mysql_error()));

			echo "<script>
			alert('Le client est enregistré avec succès!!!') ;
			</script>";
			$ff=0;

		}else
  		{
			echo "<script>
			alert('Validité de l\'abonnement incorrecte, Veuillez corriger!!!') ;
			</script>";
			//header ("location:saisieTournois.php");
			$ff=1;
  		}
	}
	
	#fin de verfication d'abonnement mansue

	/* Si l'id abonnement=3  donc Trimestriel*/

	if (isset($_POST['abonné']) && ($_POST['abonné']==3) ) 
	{
		$k=((strtotime($date_fin))-(strtotime($date_debut)))/86400;	
			if ($k>=89 && $k<93) 
			{
				echo "<script>
			alert('Le client est enregistré avec succès!!!') ;
			</script>";
				# puis insertion de donne de l'abonnement Trimestriel
				$req = "insert into client(MATRICULE, RECU_ENTENTE, RECU_PISCINE, NOM, PRENOM, SEXE, EMAIL, NATIONALITE,DATE_NAISSANCE, PHOTO)
				values('$matricule', $recu,$recupiscine,'$nom','$prenom','$sexe', '$email','$nationalite','$nee','$nomPhoto')";
				mysql_query($req) or (die (mysql_error()));
				$paie= "insert into paie(MATRICULE,ID_ABONNEMENT,DATE_DEBUT, DATE_FIN)values('$matricule','$abonnement','$date_debut','$date_fin')";
				mysql_query($paie) or (die (mysql_error()));
				$inscri= "insert into inscription(ID_SECTION, MATRICULE,DATE_INSCRIPTION)values('$section','$matricule','$date_enregistre')";
				mysql_query($inscri) or (die (mysql_error()));
				$ff=0;
			}else

  		{
			echo "<script>
			alert('Validité de l\'abonnement incorrecte, Veuillez corriger!!!') ;
			</script>";
			//header ("location:saisieTournois.php");
			$ff=1;
  		}
	}

	#fin de verfication d'abonnement Trimestriel

/* Si l'id abonnement=5 donc Semestriel*/
	if (isset($_POST['abonné']) && ($_POST['abonné']==5)) 
	{
		$k=((strtotime($date_fin))-(strtotime($date_debut)))/86400;
		if ($k>=181 && $k<185) 
		{
			echo "<script>
			alert('Le client est enregistré avec succès!!!') ;
			</script>";
			/*echo "Cotisation valable pour " .$k . "Jours ";*/
			# puis insertion de donne de l'abonnement Semestriel
			$req = "insert into client(MATRICULE, RECU_ENTENTE, RECU_PISCINE, NOM, PRENOM, SEXE, EMAIL, NATIONALITE,DATE_NAISSANCE, PHOTO)
			values('$matricule', $recu,$recupiscine,'$nom','$prenom','$sexe', '$email','$nationalite','$nee','$nomPhoto')";
			mysql_query($req) or (die (mysql_error()));
			$paie= "insert into paie(MATRICULE,ID_ABONNEMENT,DATE_DEBUT, DATE_FIN)values('$matricule','$abonnement','$date_debut','$date_fin')";
			mysql_query($paie) or (die (mysql_error()));
			$inscri= "insert into inscription(ID_SECTION, MATRICULE,DATE_INSCRIPTION)values('$section','$matricule','$date_enregistre')";
			mysql_query($inscri) or (die (mysql_error()));
			$ff=0;
		}else
  		{
			echo "<script>
			alert('Validité de l\'abonnement incorrecte, Veuillez corriger!!!') ;
			</script>";
			//header ("location:saisieTournois.php");
			$ff=1;
  		}
	}#fin de verfication d'abonnement Semestriel


	/* Si l'id abonnement=7 donc Annuel*/
	if (isset($_POST['abonné']) && ($_POST['abonné']==7)) 
	{
		$k=((strtotime($date_fin))-(strtotime($date_debut)))/86400;
		if ($k>=365 && $k<367) 
		{
			echo "<script>
			alert('Le client est enregistré avec succès!!!') ;
			</script>";
			/*echo "Cotisation valable pour " .$k . "Jours ";*/
			# puis insertion de donne de l'abonnement annuel
			$req = "insert into client(MATRICULE, RECU_ENTENTE, RECU_PISCINE, NOM, PRENOM, SEXE, EMAIL, NATIONALITE,DATE_NAISSANCE, PHOTO)
			values('$matricule', $recu,$recupiscine,'$nom','$prenom','$sexe', '$email','$nationalite','$nee','$nomPhoto')";
			mysql_query($req) or (die (mysql_error()));
			$paie= "insert into paie(MATRICULE,ID_ABONNEMENT,DATE_DEBUT, DATE_FIN)values('$matricule','$abonnement','$date_debut','$date_fin')";
			mysql_query($paie) or (die (mysql_error()));
			$inscri= "insert into inscription(ID_SECTION, MATRICULE,DATE_INSCRIPTION)values('$section','$matricule','$date_enregistre')";
			mysql_query($inscri) or (die (mysql_error()));
			$ff=0;
		}else{
			echo "<script>
			alert('Validité de l\'abonnement incorrecte, Veuillez corriger!!!') ;
			</script>";
			//header ("location:saisieTournois.php");
			$ff=1;
  		}
	}





  	}else{

echo "<script>
		alert('Choix de l\'abonnement est incorrecte car l\'abonné est dans la catégorie d\'enfant, Veuillez corriger!!!') ;
		</script>";
		$ff=2;



  	}
	#fin de verfication d'abonnement annuel



}








/*Pour adulte***************************************************************************************************************************888888888888*/








elseif ($nee<$moins15ans)
{
 if ((isset($_POST['abonné']) && ($_POST['abonné']==2))||(isset($_POST['abonné']) && ($_POST['abonné']==4)) ||(isset($_POST['abonné']) && ($_POST['abonné']==6)) ||(isset($_POST['abonné']) && ($_POST['abonné']==8))) 
 {


/*Si l'id abonnement=2 donc mensuel*/
	if (isset($_POST['abonné']) && ($_POST['abonné']==2)) 
	{
		$k=((strtotime($date_fin))-(strtotime($date_debut)))/86400;
		if ($k>=28 && $k<32) 
		{
			/*echo "Cotisation valable pour " .$k . "Jours ";*/
			# puis insertion de donne de l'abonnement mansuel
			echo "<script>
			alert('Le client est enregistré avec succès!!!') ;
			</script>";

			$req = "insert into client(MATRICULE, RECU_ENTENTE, RECU_PISCINE, NOM, PRENOM, SEXE, EMAIL, NATIONALITE,DATE_NAISSANCE, PHOTO)
			values('$matricule', $recu,$recupiscine,'$nom','$prenom','$sexe', '$email','$nationalite','$nee','$nomPhoto')";
			mysql_query($req) or (die (mysql_error()));
			$paie= "insert into paie(MATRICULE,ID_ABONNEMENT,DATE_DEBUT, DATE_FIN)values('$matricule','$abonnement','$date_debut','$date_fin')";
			mysql_query($paie) or (die (mysql_error()));
			$inscri= "insert into inscription(ID_SECTION, MATRICULE,DATE_INSCRIPTION)values('$section','$matricule','$date_enregistre')";
			mysql_query($inscri) or (die (mysql_error()));
			$ff=0;

			
		}
		else
  		{
			echo "<script>
			alert('Validité de l\'abonnement incorrecte, Veuillez corriger!!!') ;
			</script>";
			//header ("location:saisieTournois.php");
			$ff=1;
  		}
	}#fin de verfication d'abonnement mansue




	
	if (isset($_POST['abonné']) && ($_POST['abonné']==4) ) 
	{
		$k=((strtotime($date_fin))-(strtotime($date_debut)))/86400;	
			if ($k>=89 && $k<93) 
			{
				/*echo "Cotisation valable pour " .$k . "Jours ";*/

				# puis insertion de donne de l'abonnement Trimestriel
				echo "<script>
			alert('Le client est enregistré avec succès!!!') ;
			</script>";

				$req = "insert into client(MATRICULE, RECU_ENTENTE, RECU_PISCINE, NOM, PRENOM, SEXE, EMAIL, NATIONALITE,DATE_NAISSANCE, PHOTO)
				values('$matricule', $recu,$recupiscine,'$nom','$prenom','$sexe', '$email','$nationalite','$nee','$nomPhoto')";
				mysql_query($req) or (die (mysql_error()));
				$paie= "insert into paie(MATRICULE,ID_ABONNEMENT,DATE_DEBUT, DATE_FIN)values('$matricule','$abonnement','$date_debut','$date_fin')";
				mysql_query($paie) or (die (mysql_error()));
				$inscri= "insert into inscription(ID_SECTION, MATRICULE,DATE_INSCRIPTION)values('$section','$matricule','$date_enregistre')";
				mysql_query($inscri) or (die (mysql_error()));
				$ff=0;
			}else

  		{
			echo "<script>
			alert('Validité de l\'abonnement incorrecte, Veuillez corriger!!!') ;
			</script>";
			//header ("location:saisieTournois.php");
			$ff=1;
  		}
	}#fin de verfication d'abonnement mansuel

	/* Si l'id abonnement=6 donc Semestriel*/
	if (isset($_POST['abonné']) && ($_POST['abonné']==6)) 
	{
		$k=((strtotime($date_fin))-(strtotime($date_debut)))/86400;
		if ($k>=181 && $k<185) 
		{
			/*echo "Cotisation valable pour " .$k . "Jours ";*/
			# puis insertion de donne de l'abonnement Semestriel
			echo "<script>
			alert('Le client est enregistré avec succès!!!') ;
			</script>";

			$req = "insert into client(MATRICULE, RECU_ENTENTE, RECU_PISCINE, NOM, PRENOM, SEXE, EMAIL, NATIONALITE,DATE_NAISSANCE, PHOTO)
			values('$matricule', $recu,$recupiscine,'$nom','$prenom','$sexe', '$email','$nationalite','$nee','$nomPhoto')";
			mysql_query($req) or (die (mysql_error()));
			$paie= "insert into paie(MATRICULE,ID_ABONNEMENT,DATE_DEBUT, DATE_FIN)values('$matricule','$abonnement','$date_debut','$date_fin')";
			mysql_query($paie) or (die (mysql_error()));
			$inscri= "insert into inscription(ID_SECTION, MATRICULE,DATE_INSCRIPTION)values('$section','$matricule','$date_enregistre')";
			mysql_query($inscri) or (die (mysql_error()));
			$ff=0;
		}else
  		{
			echo "<script>
			alert('Validité de l\'abonnement incorrecte, Veuillez corriger!!!') ;
			</script>";
			//header ("location:saisieTournois.php");
			$ff=1;
  		}
	}#fin de verfication d'abonnement Semestriel


	/* Si l'id abonnement=8 donc Annuel*/
	if (isset($_POST['abonné']) && ($_POST['abonné']==8)) 
	{
		$k=((strtotime($date_fin))-(strtotime($date_debut)))/86400;
		if ($k>=365 && $k<367) 
		{
			/*echo "Cotisation valable pour " .$k . "Jours ";*/
			# puis insertion de donne de l'abonnement annuel
			echo "<script>
			alert('Le client est enregistré avec succès!!!') ;
			</script>";

			$req = "insert into client(MATRICULE, RECU_ENTENTE, RECU_PISCINE, NOM, PRENOM, SEXE, EMAIL, NATIONALITE,DATE_NAISSANCE, PHOTO)
			values('$matricule', $recu,$recupiscine,'$nom','$prenom','$sexe', '$email','$nationalite','$nee','$nomPhoto')";
			mysql_query($req) or (die (mysql_error()));

			$paie= "insert into paie(MATRICULE,ID_ABONNEMENT,DATE_DEBUT, DATE_FIN)values('$matricule','$abonnement','$date_debut','$date_fin')";
			mysql_query($paie) or (die (mysql_error()));

			$inscri= "insert into inscription(ID_SECTION, MATRICULE,DATE_INSCRIPTION)values('$section','$matricule','$date_enregistre')";
			mysql_query($inscri) or (die (mysql_error()));
			$ff=0;
		}else

  		{
			echo "<script>
			alert('Validité de l\'abonnement incorrecte, Veuillez corriger!!!') ;
			</script>";
			//header ("location:saisieTournois.php");
			$ff=1;
  		}
	}


}else{

	echo "<script>
		alert('Choix de l\'abonnement est incorrecte car l\'abonné est dans la catégorie d\'adulte, Veuillez corriger!!!') ;
		</script>";
		$ff=2;
}
	

}else{


	echo "<script>
	alert('Date naissance invalide, Veuillez corriger !!!') ;
	</script>";
	//header ("location:saisieTournois.php");
	$ff=1;
}

/*}

else
{
	echo "<script>
alert('Le matriculeFGFHGJFGFGFH!!!') ;
</script>";
}*/

?>

<html>
<?php include ("entete_rec.php");?>
  <header>


  </header>
  <div class="content">
<body>


	<table border="">

		<tr>
			<td> Matricule:</td>
			<td><?php echo ($matricule)?></td>
		</tr>
		<tr>
			<td> Recu Entente:</td>
			<td><?php echo ($recu)?></td>
		</tr>

		<tr>
			<td> Recu Piscine:</td>
			<td><?php echo ($recupiscine)?></td>
		</tr>
		<tr>
			<td> Nom:</td>
			<td><?php echo ($nom)?></td>
		</tr>

		<tr>
			<td> Prenom:</td>
			<td><?php echo ($prenom)?></td>
		</tr>

		<tr>
			<td> Email:</td>
			<td><?php echo ($email)?></td>
		</tr>

		<tr>
			<td> Nationalite:</td>
			<td><?php echo ($nationalite)?></td>
		</tr>

		<!-- <tr>
			<td> Date de naissance :</td>
			<td><?php echo ($dateNaissance)?></td>
		</tr> -->
		<tr>
			<td> Photo:</td>

			<td><img src= "images/<?php echo ($nomPhoto)?>" width="150px";height="120px";</td>
		</tr>
	</table>
		
<?php if ($ff==1) {
			echo "<h2>" ."Données incorrectes et non enregistrées . " ."</h2>";
			echo "<a href='SaisieClient.php'>"."Nouveau Client"."</a>";
		}?>

		<?php if ($ff==2) {
			echo "<h2>" ."Données incorrectes et non enregistrées . " ."</h2>";
			echo "<a href='SaisieClient.php'>"."Nouveau Client"."</a>";
		}?>
	
	<?php if ($ff==0) {
			echo "<h2>" ."Cotisation valable pour " .$k . "Jours" ."</h2>";
			echo "<a href='afficherClientRec.php'>"."Afficher tous les Clients"."</a>";
		}?>

</div><?php include ("pied.php");?>
</body>
</html>