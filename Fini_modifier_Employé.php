<!DOCTYPE html>
<html >

<head>
<meta charset="UTF-8">
	<title>Tous les employés </title>
  <link rel="stylesheet" type="text/css" href="css/menu_admin.css">
  <script src="js/jquery.js"></script>
</head>
	  <body>
			<?php include ("entete_admin.php");?>		
					<div class="content">
						
									<div class="alert alert-error hide" id="idError">
								<script>alert('Client mis à jour avec succès');</script>

										<h3 class="alert-heading">Modification effectuer</h3>
										
									</div><br/>

<?php
	require_once("afficherClient.php"); //un forword
?>
							</div>
							<!--/fieldset-->
					</div>		
				
<script>
					$(document).ready(function(){
						$(window).on("load", function(){
							$("#id_div").addClass("error");
								$("#idError").show("slow").delay(3000).hide("slow");
							}
						);
					});
				</script>
			  
	  </body>		
</html>
