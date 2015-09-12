<?php
require_once("connection.php");
//$matricule=0;
$matricule=$_GET['matricule'];

$req= "delete from client where MATRICULE='$matricule'";
mysql_query($req) or die(mysql_error());
//header("location:afficherClient.php"); une redirection
require_once("afficherClient.php"); //un forword
?> 