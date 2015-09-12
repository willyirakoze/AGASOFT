<meta charset="UTF-8">
<?php
require_once("connection.php");
$matricule = $_POST['matricule'];
$abonnement = $_POST['abonné'];
$nee = $_POST['datenaissance']; 
$date_debut = $_POST['datedebut'];
$date_fin = $_POST['datefin'];
$date_enregistre=date('Y-m-d');
$moins5ans = date('Y-m-d',strtotime("-5 years"));
$moins15ans= date('Y-m-d',strtotime("-15 years"));


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
			$req="update paie set ID_ABONNEMENT='$abonnement',date_DEBUT='$date_debut',DATE_FIN='$date_fin' where MATRICULE=$matricule";
			mysql_query($req)or die(mysql_error());

			echo "<script>
			alert('Abonnement du Client mis à jour avec succes!!!') ;
			</script>";
		

		}else
  		{
			echo "<script>
			alert('Validité de l\'abonnement incorrecte, Veuillez corriger!!!') ;
			</script>";
			
  		}
	}
	
	#fin de verfication d'abonnement mansue

	/* Si l'id abonnement=3  donc Trimestriel*/

	if (isset($_POST['abonné']) && ($_POST['abonné']==3) ) 
	{
		$k=((strtotime($date_fin))-(strtotime($date_debut)))/86400;	
			if ($k>=89 && $k<93) 
			{
				
				# puis insertion de donne de l'abonnement Trimestriel
			$req="update paie set ID_ABONNEMENT='$abonnement',date_DEBUT='$date_debut',DATE_FIN='$date_fin' where MATRICULE=$matricule";
			mysql_query($req)or die(mysql_error());
			echo "<script>
			alert('Abonnement du Client mis à jour avec succes!!!') ;
			</script>";

			}else

  		{
			echo "<script>
			alert('Validité de l\'abonnement incorrecte, Veuillez corriger!!!') ;
			</script>";
			
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
			$req="update paie set ID_ABONNEMENT='$abonnement',date_DEBUT='$date_debut',DATE_FIN='$date_fin' where MATRICULE=$matricule";
			mysql_query($req)or die(mysql_error());

			echo "<script>
			alert('Abonnement du Client mis à jour avec succes!!!') ;
			</script>";
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
			$req="update paie set ID_ABONNEMENT='$abonnement',date_DEBUT='$date_debut',DATE_FIN='$date_fin' where MATRICULE=$matricule";
			mysql_query($req)or die(mysql_error());

			echo "<script>
			alert('Abonnement du Client mis à jour avec succes!!!') ;
			</script>";
		}else{
			echo "<script>
			alert('Validité de l\'abonnement incorrecte, Veuillez corriger!!!') ;
			</script>";
			
  		}
	}

  	}else{

echo "<script>
		alert('Choix de l\'abonnement incorrecte car l\'abonné est dans la catégorie d\'enfant, Veuillez corriger!!!') ;
		</script>";
		
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
			

			$req="update paie set ID_ABONNEMENT='$abonnement',date_DEBUT='$date_debut',DATE_FIN='$date_fin' where MATRICULE=$matricule";
			mysql_query($req)or die(mysql_error());

			echo "<script>
			alert('Abonnement du Client mis à jour avec succes!!!') ;
			</script>";
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
				

				$req="update paie set ID_ABONNEMENT='$abonnement',date_DEBUT='$date_debut',DATE_FIN='$date_fin' where MATRICULE=$matricule";
			mysql_query($req)or die(mysql_error());

			echo "<script>
			alert('Abonnement du Client mis à jour avec succes!!!') ;
			</script>";
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
			

			$req="update paie set ID_ABONNEMENT='$abonnement',date_DEBUT='$date_debut',DATE_FIN='$date_fin' where MATRICULE=$matricule";
			mysql_query($req)or die(mysql_error());

			echo "<script>
			alert('Abonnement du Client mis à jour avec succes!!!') ;
			</script>";

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
			

			$req="update paie set ID_ABONNEMENT='$abonnement',date_DEBUT='$date_debut',DATE_FIN='$date_fin' where MATRICULE=$matricule";
			mysql_query($req)or die(mysql_error());

			echo "<script>
			alert('Abonnement du Client mis à jour avec succes!!!') ;
			</script>";
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
		alert('Choix de l\'abonnement incorrecte car l\'abonné est dans la catégorie d\'adulte, Veuillez corriger!!!') ;
		</script>";
		$ff=2;
}
	

}
require_once("chercherAbonnementrec.php"); //un forword
?>
