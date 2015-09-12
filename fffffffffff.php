 <?php

 /*Pour enfant*/

	/*Si l'id abonnement=1 donc mensuel*/
	if (isset($_POST['abonné']) && ($_POST['abonné']=="1")) 
	{
		$k=((strtotime($date_fin))-(strtotime($date_debut)))/86400;
		if ($k>=28 && $k<32) 
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

	if (isset($_POST['abonné']) && ($_POST['abonné']=="3") ) 
	{
		$k=((strtotime($date_fin))-(strtotime($date_debut)))/86400;	
			if ($k>=89 && $k<93) 
			{
				/*echo "Cotisation valable pour " .$k . "Jours ";*/

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
	if (isset($_POST['abonné']) && ($_POST['abonné']=="5")) 
	{
		$k=((strtotime($date_fin))-(strtotime($date_debut)))/86400;
		if ($k>=181 && $k<185) 
		{
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
	if (isset($_POST['abonné']) && ($_POST['abonné']=="	7")) 
	{
		$k=((strtotime($date_fin))-(strtotime($date_debut)))/86400;
		if ($k>=365 && $k<367) 
		{
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
 else{
		echo "<script>
		alert('Choix de l\'abonnement incorrecte car l\'abonné est dans la catégorie d\'enfant, Veuillez corriger!!!') ;
		</script>";
		$ff=2;
  	}
	#fin de verfication d'abonnement annuel
?>








<!-- ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;; -->





















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
			echo "<a href='afficherClient.php'>"."Afficher tous les Clients"."</a>";
		}












/*]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]*/





/*Si l'id abonnement=2 donc mensuel*/
	if (isset($_POST['abonné']) && ($_POST['abonné']==2)) 
	{
		$k=((strtotime($date_fin))-(strtotime($date_debut)))/86400;
		if ($k>=28 && $k<32) 
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
			$ff=0;

			
		}
		else
  		{
			echo "<script>
			alert('Validité de l\'abonnement incorrecte, Veuillez corriger!!!AAAAAAAAAAAA') ;
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
	else
	{
		echo "<script>
		alert('Choix de l\'abonnement incorrecte car l\'abonné est dans la catégorie d\'adulte, Veuillez corriger!!!') ;
		</script>";
		$ff=2;
  	}
#fin de verfication d'abonnement annuel
}else{
	echo "<script>
	alert('Date naissance invalide, Veuillez corriger bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb!!!') ;
	</script>";
	//header ("location:saisieTournois.php");
	$ff=1;
 }





/*'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''
*/



/*Si l'id abonnement=1 donc mensuel*/
	if (isset($_POST['abonné']) && ($_POST['abonné']==1)) //si type abonnement est mansuel enfant
	{
		$k=((strtotime($date_fin))-(strtotime($date_debut)))/86400;
		if ($k>=28 && $k<32) //si l'inerval est de 30jrs
		{echo "jjjjjjjjjjjjjjjjjjjjjj";
			/*echo "Cotisation valable pour " .$k . "Jours ";*/
			# puis insertion de donne de l'abonnement mansuel
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
	
	#fin de verfication d'abonnement mansue

	/* Si l'id abonnement=3  donc Trimestriel*/

	if (isset($_POST['abonné']) && ($_POST['abonné']==3) ) 
	{
		$k=((strtotime($date_fin))-(strtotime($date_debut)))/86400;	
			if ($k>=89 && $k<93) 
			{
				/*echo "Cotisation valable pour " .$k . "Jours ";*/

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



		?>