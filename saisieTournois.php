<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
	<title>Saisie tournois </title>

<link rel="stylesheet" type="text/css" href="css/menu_admin.css" />
<link rel="stylesheet"  href="jquery-ui-1.10.4.custom\js/jquery-1.10.2.js" />
<link rel="stylesheet"  href="jquery-ui-1.10.4.custom\css\ui-lightness/jquery-ui-1.10.4.custom.css" />
<link href="PHP_plugins/font-awesome-4.0.3/css/font-awesome.css" rel="stylesheet">  
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/jquery-1.10.2.min.js">

<link href="PHP_plugins/font-awesome-4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/jquery-1.10.2.min.js">
<!-- fonction de java script -->
<link rel="stylesheet" href="PHP_plugins\jquery-ui-1.10.4.custom\css\ui-lightness/jquery-ui-1.10.4.custom.css">
  
  <script src="PHP_plugins\jquery-ui-1.10.4.custom\js/jquery-1.10.2.js"></script>
  <script src="PHP_plugins\jquery-ui-1.10.4.custom\js/jquery-ui-1.10.4.custom.js"></script>
   

</head>
<body>
  <?php include ("entete_admin.php");?>
  <div class="content">
	<h1 class="titre" align="center"> <i>Nouveau tournois</i> </h1>
<fieldset>
<legend><b><i>Catégorie</i></b> </legend>
	<form method= "POST" action ="" enctype= "multipart/form-data">
		<table>
			
      <tr>
        <td>Petit: [8-12ans]</td>
        <td><button type="button" onclick = "window.location='tournois12ans.php'" name="12ans"> 
                Select_Garçon 
            </button>
              &nbsp&nbsp&nbsp&nbsp&nbsp
            <button type="button" onclick = "window.location= 'tournois12ansFille.php'" name="12ans"> Select_Fille </button></td>
      </tr>

      <tr>
        <td>Moyen: [13-16ans]</td>
        <td><button type="button" onclick = "window.location= 'tournois16ans.php'" name="16ans"> 
                Select_Garçon 
            </button>
                &nbsp&nbsp&nbsp&nbsp&nbsp
            <button type="button" onclick = "window.location= 'tournois16ansFille.php'" name="16ans"> Select_Fille </button></td>
      </tr>

      <tr>
        <td>Grand: [17-20ans]</td>
        <td><button type="button" onclick = "window.location= 'tournois20ans.php'" name="20ans"> 
                Select_Garçon 
            </button>
              &nbsp&nbsp&nbsp&nbsp&nbsp
            <button type="button" onclick = "window.location= 'tournois20ansFille.php'" name="20ans"> Select_Fille </button></td>
      </tr>


    </table>
</tr>
</form>
</fieldset>
</div><?php include ("pied.php");?>
</body>
</html>


