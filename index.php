
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
<!-- Bootstrap Core CSS -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet" type="text/css">



    <link href="PHP plugins/font-awesome-4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/menu_admin.css">
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/jquery-1.10.2.min.js">
<script type="text/javascript">
</script>
</head>
<body>


<?php 
if(isset($_GET['feil']))
{
  echo "<script>
  alert('Nom et / ou mot de passe saisi est incorrect, Vérifiez vos paramètres d\'authentification S.v.P !!!!!!!');
  </script>";
}
if(isset($_GET['feil1']))
{
  echo "<script>
  alert('Authentification  comme admin S.P.V !');
  </script>";
}
  ?>

<!-- Section: intro -->
    <section id="intro" class="intro">
  
    <div class="slogan">
    <h2>Entente Sportive de Bujumbura<span class="text_color"></span> </h2>
      <h4>Section Piscine</h4>
    </div>
    <div class="page-scroll">
      <a href="#service" class="btn btn-circle">
        <i class="fa fa-angle-double-down animated"></i>
      </a>
    </div>
    
  <!-- /Section: intro -->



<!-- <div class="fullsite">
    <div class="header1"><h1><marquee>Bienvenue dans AGASOFT<img src="outils/2.jpg"></marquee></h1></div> 
        <div class="content">-->
    
                
<div class="loginform-in">
<h2> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Authentification <b><i>AGAS</i></b></h2></br>

<!-- <div  class="err" id="add_err"></div> -->

    <form action="ch_index.php" method="post">
      <strong>Réceptionniste &nbsp&nbsp</strong><input type='radio' name='user1' value='recept'required autofocus /><br/>
     <strong>Administrateur </strong><input type='radio' name='user1' value='admin'required autofocus />
<fieldset style="width:80% ; margin:auto; ">
        <ul>
            <label for="name">Nom utilisateur </label>
            <input type="text" size="30"  name="name" id="name"id="name" onblur="return ValideNom(this.id)  " required autofocus /></br></br>
                        <label for="name">Mot de passe </label>
            <input type="password" size="40"  name="word" id="word" onblur="return ValidePass(this.id)" required autofocus/>
            <label></label>
            </br></br>
      <div class="loginbouton">
            <input type="submit" id="login" name="login" value="Login" class="loginbutton">
      </div>
        </ul>
     </form>    
</fieldset> 
</div>     
</div>
<!-- start php -->



<!-- end seculity of sesssions test -->
<!--    <?php include ("pied.php");?> -->

</div></section>
</body>
</html>