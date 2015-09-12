
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
   
<link rel="stylesheet" type="text/css" href="css/ink.css"> 
   <script type="text/javascript" src="css/ink-all.js"></script> 
   <link href="PHP plugins/font-awesome-4.0.3/css/font-awesome.css" rel="stylesheet">  
   <link rel="stylesheet" type="text/css" href="styles.css">
   <link rel="stylesheet" type="text/css" href="http://code.jquery.com/jquery-1.10.2.min.js">

</head>
    <body>



    <div class="body">
    
<!-- place de l'en tete -->
<?php //include_once('gd_en_tete.php');?>
<!-- start of affichage de liste des client -->
<?php

/*_________________________________________________________*/
        // connect to the database
        include('ch_config.php');
if (isset ($_SESSION["profil"]) && $_SESSION["profil"] =="admin" ) 
        {

//echo ("<strong> Bonjour ".$_SESSION["Nameuser"]." vous êtes maintenant sur la page 1<br/> </strong>") ;     


        $result = mysql_query("SELECT * FROM participant ");

} 
//corrige*************************************************





//*******************************************
?>

<!--  <link rel="stylesheet" type="text/css" href="plugins/dist/css/ink.css">
 -->
<form action="gd_abs.php" method="post">
<table id="myTable" class="ink-table hover" data-page-size="500" data-pagination="#myTablePagination">   
<thead>
        <tr>
            <!-- <th class="align-left" data-sortable="true">Pepper</th>
            <th class="align-left" data-sortable="true">Scoville Rating</th>
             -->
          <th class="align-left" data-sortable="true">cocher</th>
          <th class="align-left" data-sortable="true">Id</th>
          <th class="align-left" data-sortable="true">Nom & Prenom</th>
<!--           <th class="align-left" data-sortable="true">Prenom</th>
 -->        </tr>
    </thead>
    <tbody>


    
<?php 
while($resultat=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td><input type='radio' value=' ".$resultat['matricule']."' name='Testvalues[]'type='submit'></td>";
echo "<td>".$resultat['matricule']."</td>";
echo "<td>".$resultat['nom']." ".$resultat['prenom']."</td>";
/*if($resultat['autop']=='yes')
    {

            echo "<td>"."Oui"."</td>";
    }
    else
        {
            echo "<td>"."Non"."</td>";
            }*/
echo"</tr>";
}

?>
</tbody>
    </table>

        <nav class="ink-navigation" id="myTablePagination">
    <ul class="pagination "></ul>
</nav>
<input type="submit" name="modif" value="modifier">
<input type="submit" name="affich" value="afficher">
<input type="submit" name="sup" value="suprimer">
</form>
<script>
    Ink.requireModules( ['Ink.Dom.Selector_1','Ink.UI.Table_1'], function( Selector, Table ){
        var tableElement = Ink.s('#myTable');
        var tableObj = new Table( tableElement );
    });
</script>
        <!-- start foot -->

<!-- <footer class="foot">
<p>Gestip &copy 2014 Designed by Geden LTD</p>
</footer>
 -->  
  <?php
//fin if
if (!isset ($_SESSION["profil"]))
{
    header ("Location: index.php") ;
}
  ?>
</div>       

    </body>
</html>
