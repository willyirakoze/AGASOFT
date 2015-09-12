
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
  alert('VerIfier vos paramètre d autentification S.P.V !');
  </script>";
}
if(isset($_GET['feil1']))
{
  echo "<script>
  alert('autantification  comme admin S.P.V !');
  </script>";
}
  ?>
<div class="fullsite">
    <div class="header1"><h1><marquee>Bienvenue dans AGASOFT<img src="outils/2.jpg"></marquee></h1></div>
        <div class="content">
    
                
<div class="loginform-in">
<h2> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp AGASOFT</h2></br>

<!-- <div  class="err" id="add_err"></div> -->

    <form action="ch_index.php" method="post">
      <strong>Réceptioniste &nbsp&nbsp</strong><input type='radio' name='user1' value='recept'required autofocus /><br/>
     <strong>Administrateur </strong><input type='radio' name='user1' value='admin'required autofocus />
<fieldset style="width:80% ; margin:auto;">
        <ul>
            <label for="name">User name </label>
            <input type="text" size="30"  name="name" id="name"id="name" onblur="return ValideNom(this.id)  " required autofocus /></br></br>
                        <label for="name">Password </label>
            <input type="password" size="40"  name="word" id="word" onblur="return ValidePass(this.id)" required autofocus/>
            <label></label>
            </br></br>
            <input type="submit" id="login" name="login" value="Login" class="loginbutton">
        </ul>
     </form>    
</fieldset> 
</div>     
</div>
<!-- start php -->



<!-- end seculity of sesssions test -->
     <?php include ("pied.php");?>

</div>
</body>
</html>