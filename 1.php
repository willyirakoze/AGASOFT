<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>AGAS</title>
<link rel="stylesheet" type="text/css" href="style.css" />

<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>



<style type="text/css">
<!--
.Style1 {color: #0099FF}
.Style2 {color: #FF3300}
-->
</style>
</head>

<body>

   <!-- Begin Wrapper -->

   <div id="wrapper">

         <!-- Begin Header -->

         <div id="header">

		 

                <div class="logo">

					<h1 id="lineone">Application de Gestion des 
					Activité Sportifves <span>AGAS</span> </h1> 

					<h2 id="linetwo">Est Votre Boutique</h2>

		

                </div>		 

			   

		 </div>

		 <!-- End Header -->

	

 <!-- Begin Naviagtion -->

         <div id="navigation">

		       <ul>

               <li><a href="index.php">ACCUEIL</a></li>

			   <?php

			    $cnx = Connection_mySql();

		        mysql_select_db("mogadorboutik",$cnx) or die("erreur de connexion a la base de donnees");

	           $query = 'SELECT * FROM `categorie` WHERE `supCat`=1 AND `idCat` <> 1';

				$result = mysql_query($query) or die("erreur!!");

				

				while($row = mysql_fetch_row($result)){

					

echo "<li><a href=\"".$_SERVER['PHP_SELF']."?cat=".$row[0]."\">".strtoupper($row[1])."</a></li>";

					

				}

				mysql_close();

               ?>

               </ul>		 

			   

		 </div>

		 <!-- End Naviagtion -->

		 

		 <!-- Begin Left Column -->

		 <div id="leftcolumn">

		 

		  <h3>Utilisateur</h3>

          <?php

		  		if(isset($_SESSION['user'])){

		   ?>

                <ul>

                <li><span class="Style2">Bienvenue <?php echo $_SESSION['user']; ?>

                
                <?php

		    		print date("d/m/Y");

		        ?>
                

                </span>               </li>

                <li><a href="index.php?user=1">Profil</a></li>

                <li><a href="index.php?user=2&task=affiche">Panier</a></li>

                

                <li><a href="modules/dcnx.php">Se Déconnecter</a></li>

           </ul>   

           

           <?php		

						

				}else{

		        	if((isset($_POST['login'])) && (isset($_POST['pw']))){

							if(verifuser($_POST['login'], $_POST['pw'])){

								$_SESSION['user'] = $_POST['login'];

								?>

 				 <ul>

                <li><font color="#996699"><?php echo $_SESSION['user']; ?>

                <?php

		  			  print date("d/m/Y");

				?>

                </font>

                </li>

                <li><a href="index.php?user=1">Profil</a></li>

                <li><a href="index.php?user=2&task=affiche">Panier</a></li>

               

                <li><a href="modules/dcnx.php">Se Déconnecter</a></li>

                 </ul>                                

                                
                             <?php
								 
							}else{

							?>

           <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

                    <ul>

<li><center><input type="text" name="login" value="<?php echo $_COOKIE['login'];?>" onfocus="javascript:this.value='';"></center></li>

<li><center><input type="password" name="pw" value="<?php echo $_COOKIE['pwd'];?>" onfocus="javascript:this.value='';"/></center></li>

                	<li>
					<input type="hidden" name="save" value="no">
                    <input type="checkbox" name="save" value="save" checked="checked"/>

                    <font color="#996600" size="0.9em">S'enregistrer                    </font>                     </li>

                    <li><center><input type="submit" value="connexion"></center></li>

                    <li>
                      <center>
                        <span class="last "><a href="index.php?user=4">S'Enreg</a></span><span class="last Style1"><a href="index.php?user=4">istrer</a></span>
                      </center>
                      <span class="last Style1"></span></li>
                    </ul>

</form>

                            <?php

							}

					?>

                    	

                    <?php

					}else{

		  ?>

          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

                    <ul>

               <li><center><input type="text" name="login" value="<?php echo $_COOKIE['login'];?>" onfocus="javascript:this.value='';"></center></li>

               <li><center>
                 <input type="password" name="pw" value="<?php echo $_COOKIE['pwd'];?>" onfocus="javascript:this.value='';"/>
               </center></li>

                	<li>
					<input type="hidden" name="save" value="no">
                    <input type="checkbox" name="save" value="save" checked="checked"/>

                    <font color="#996600" size="0.9em">Mémoriser

                    </font>

                     </li>

                    <li><center><input type="submit" value="connexion"></center></li>

                    <li class="last"><center><a href="index.php?user=4">S'Enregistrer</a></center></li>

                    </ul>

</form>

<?php

}

}

?>

                   <div class="contact">

		  <h3>Contact</h3>



                  <p>

                    <em>Email:</em> <a href=" mailto:alahmad.elhassan@gmail.com?subject=contact-Mogadorboutique">Contactez-nous</a></p>

           </div>

 

                    <div class="aboutus">

                    <h3>A propos</h3>

                    <p>

                    Ce site fait l'objet de mon projet de fin d'études à l'issue&nbsp;de&nbsp;la formation&nbsp;Licence&nbsp;professionelle <b>:: Administration de parc PC ::</b>

                    </p>

		 </div>		 

		 </div>

		 <!-- End Left Column -->

		 

		 <!-- Begin Right Column -->

	 <div id="rightcolumn">



<div class="topright">

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

      <input type="text" value="Recherche..." name="kwd" onfocus="javascript:this.value='';"/>

      <select name="choix">

      		<option value="art">par Produit

            <option value="cat">par Cat&eacute;gorie

            

      </select>

      <input type="submit" value="chercher" />

    </form>

    

    

</div>

		        <?php

				        if((isset($_POST['kwd'])) && (isset($_POST['choix']))){

						    ?>

                            <div class="topright">

                            <?php

							if($_POST['choix'] == "art"){

					           ?>

                 <h3>Recherche Par article(<?php echo $_POST['kwd'];?>)</h3>

                               <?php

							   chercherArticle($_POST['kwd']);		

							}

							if($_POST['choix'] == "cat"){

							  ?>

                <h3>Recherche Par cat&eacute;gorie(<?php echo $_POST['kwd'];?>)</h3>              

                               <?php

							   chercherCategorie($_POST['kwd']);

							}

							?>

                            </div>

                            <?php

						}else{

						    if(isset($_GET['user'])){

							    switch($_GET['user']){

										case 1 : include_once("user/profil.php");
												break;
												
										case 2 : include_once("user/panier.php");
												 break;
												 			
										
												
										case 4 :include_once("user/suscribe.php");
												break;
												
										case 5 :include_once("user/commander.php");

												break;				

								}

							}else{

					 		if(isset($_GET['cat'])){

				?>

     <div class="topright">

                   <h3><?php echo strtoupper(Get_Cat_Description($_GET['cat']));?></h3>

                   <h4>Les sous-Cat&eacute;gories:</h4>

                  <p>

                     <?php

					        include_once("modules/afficheCat.php");

					 ?>

                  </p>

                  <h4>Les produits :</h4>

                  <p>

                     <?php

					        include_once("modules/afficheArts.php");

					 ?>

                  </p>

                  <?php

			   }elseif(isset($_GET['art'])){

			   ?>

			   		<h3><?php echo strtoupper(Get_Art_ref($_GET['art']));?></h3>

                    <p>

                    	<?php

					        include_once("modules/afficheArt.php");

					    ?>	

                    </p>

                    

           </div>

		       

                <?php    

			       

			   }else{

			   ?>

         <div id="boxes">

               <div class="box1">

               <h2>Nouveaut&eacute;s</h2>
               <p>&nbsp;</p>
               <?php

			   		$res = select_new(); 		

			   ?>

             

               </div>

               <div class="box2">

               <h2>Les produits les plus populaires</h2>
               <p>&nbsp;</p>
               <?php

			   		select_popular();

			   ?>

                    
               </div>







           </div>
		   

                <div class="clear">
				
			</div>

		<div align="center" id="triplebox">

		  

			

			

			

             <div class="col">

              <script type="text/javascript">

AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','680','height','195','title','MOGADORBOUTIK','src','images/mogadorboutik','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','images/mogadorboutik' ); //end AC code

</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="680" height="195" align="right" title="MOGADORBOUTIK">

          <param name="movie" value="images/mogadorboutik.swf" />

                <param name="quality" value="high" />

                <embed src="images/mogadorboutik.swf" width="680" height="195" align="right" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash"></embed>

              </object></noscript>

            </div>

		

		</div>

	 <?php

	 }

	 }

	 }

	 ?>

		 

		 </div>

		 <!-- End Right Column -->

		 

		 <!-- Begin Footer -->

		 <div id="footer">

		       

                    <p><br />

            Copyright &copy; 2008 by <a href="administration/">ALAHMAD EL HASSAN</a>  </p>	

			    

 </div>


   

</body>

</html>        