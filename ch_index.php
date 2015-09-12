<?php
if (isset($_POST['login'])) {
require_once("connection.php");
  // connexion a la base de donne
    
// verficatin du type d'utilisateur
if (isset($_POST['user1']) && (($_POST['user1'])=="admin")) 
{  
  $res=0;
  $nombre=0;
  //echo " vyabaye";
   $adm="select * from user where ( NAME = '$_POST[name]' AND PASSWORD = '$_POST[word]')";     
      $res= mysql_query($adm,$conn);           
        $nombre=mysql_num_rows($res);
  if($nombre!=0)
  {
    //début de la sessions
    session_start () ;
    $row = mysql_fetch_array($res);
     $_SESSION["id_user"] = $row['id_user'] ;
     $_SESSION["profil"] = $row['profil'] ;    
     $_SESSION["username"] = $row['username'] ;
    header ("Location:garde.php");

  }//fin if
  //sinon on retourne à la page d'inscription
  else
  { 
      $f=1;
      header ("Location: index.php?feil=$f") ;
  }//fin else

}else

if (isset($_POST['user1']) && (($_POST['user1'])=="recept")) 
{  
  $res=0;
  $nombre=0;

  //echo " eeeeeeeeeeeeeeeeeggggggggggggoooooooooooooooo";

   $adm="select * from receptioniste where ( NAME = '$_POST[name]' AND PASSWORD = '$_POST[word]')";
      
      $res= mysql_query($adm,$conn);           
        $nombre=mysql_num_rows($res);

  if($nombre!=0)
  {
    //début de la sessions
    session_start () ;
    $row = mysql_fetch_array($res);
     $_SESSION["id_user"] = $row['id_user'] ;
     $_SESSION["profil"] = $row['profil'] ;
     $_SESSION["username"] = $row['username'] ;  
    header ("Location:garderec.php");
  }//fin if
  //sinon on retourne à la page d'inscription
    else
      { 
        $f=1;
        header ("Location: index.php?feil=$f") ;
      }//fin else
  }
}
?>