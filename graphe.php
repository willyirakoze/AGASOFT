<!DOCTYPE html>
<html >

<head>
<meta charset="UTF-8">
  <title>Statistique </title>
  <link rel="stylesheet" type="text/css" href="css/menu_admin.css">
</head>
<body >
  <!-- Begin Header -->

        <?php include ("entete_admin.php");?>

  <!-- End Header -->
<div class="content">
<fieldset><legend><b><i>Statistiques</i></b> </legend>
  <form action="" method="POST">
<table>


<tr><td><select name="types" ><option value="0">--------Selection -----</option>
                <option value="1">Nombres des souscrits</option>
               <option value="2">Nombres des adultes et des enfants</option>
               <option value="3">Nombres des etranger et Burundais</option>
               </select></td></tr>
  <tr><td>Date debut <input type="date" name="dateDEB" required autofocus></td><td>Date fin<input type="date" name="dateFIN" required autofocus></td><td><input type="submit" name="envoye" value="OK" ></td>
</table></tr>

  </form>
  </fieldset>
  <div>
<?php
$date=date('Y-m-d');
if ((isset($_POST['types']))&&($_POST['types']==1)) {

//...........................IGITIGIRI CABIYANDIKISHIJE BOSE HARABIWE KUGITSINA..................................  
echo "Selon le sexe";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Statistique</title>
        <!-- import plugin script -->
        <script src='js/Chart.min.js'></script>
    </head>
    <body>
       <canvas id="income" width="300" height="200"></canvas>
        <script>
     

            <?PHP  require_once("connection.php");
            $dadeb=$_POST['dateDEB'];
          $dafin=$_POST['dateFIN'];
          $m="Masculin";
          $f="Feminin";

                                /*$result = mysql_query("SELECT count(client.SEXE) AS Nombre_INSCRIT FROM client, 
                                     inscription WHERE SEXE='$m'  GROUP BY extract(month from inscription.DATE_INSCRIPTION)");
*/

/*
$result = mysql_query("SELECT count(SEXE) AS Nombre_INSCRIT FROM client
                                     WHERE SEXE='$m' GROUP BY SEXE "); GROUP BY extract(month from inscription.DATE_INSCRIPTION)
*/

$result = mysql_query("SELECT count(SEXE) AS Nombre_INSCRIT FROM client left join inscription on inscription.MATRICULE=client.MATRICULE
                                     WHERE SEXE='$m' AND (inscription.DATE_INSCRIPTION BETWEEN '$dadeb' AND '$dafin') GROUP BY SEXE");



/*]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]*/



 /*$result1 = mysql_query("SELECT count(SEXE) AS Nombre_INSCRIT FROM client 
                                         WHERE SEXE='$f'  GROUP BY SEXE");
*/
$result1 = mysql_query("SELECT count(SEXE) AS Nombre_INSCRIT FROM client left join inscription on inscription.MATRICULE=client.MATRICULE
                                     WHERE SEXE='$f' AND (inscription.DATE_INSCRIPTION BETWEEN '$dadeb' AND '$dafin') GROUP BY SEXE");


                                  // absenc.dateabs BETWEEN '$anne1-01-01' AND '$anne2-12-31'     SELECT * FROM `client` WHERE `SEXE`="Masculin" group by extract(month from DATE_NAISSANCE)

                            ?>
            var barData = {
<?php
            $res=mysql_query("SELECT  DATE_INSCRIPTION from inscription ");
?>
                labels : ["Masculin/Feminin",],
/*               */
                datasets : [
                    {
                            
                        fillColor : "rgb(128,255,128)",
                        strokeColor : "#48A4D1",
                        data : [<?php
                while ($resultat= mysql_fetch_array($result)) {
                    echo $resultat['Nombre_INSCRIT'].",";}

?>]
                    },

                    {
                        fillColor : "rgb(0,64,128)",
                        strokeColor : "rgba(72,174,209,0.8)",


                        data : [<?php
                while ($resultat= mysql_fetch_array($result1)) {
                    echo $resultat['Nombre_INSCRIT'].",";}?>]
                    }
                ]
            }

            // get bar chart canvas
            var income = document.getElementById("income").getContext("2d");
            // draw bar chart
            new Chart(income).Bar(barData);
        </script>

        


    </body>
</html>

    
<?PHP


}elseif ((isset($_POST['types']))&&($_POST['types']==2)) {
  echo "Statistique des clients selon l'âge";


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Statistique</title>
        <!-- import plugin script -->
        <script src='js/Chart.min.js'></script>
    </head>
    <body>
       <canvas id="income" width="300" height="200"></canvas>
        <script>
           
            

            <?PHP  require_once("connection.php");
            $dadeb=$_POST['dateDEB'];
          $dafin=$_POST['dateFIN'];
          $m="Masculin";
          $f="Feminin";

                                /*$result = mysql_query("SELECT count(client.SEXE) AS Nombre_INSCRIT FROM client, 
                                     inscription WHERE SEXE='$m'  GROUP BY extract(month from inscription.DATE_INSCRIPTION)");
*/

/*
$result = mysql_query("SELECT count(SEXE) AS Nombre_INSCRIT FROM client
                                     WHERE SEXE='$m' GROUP BY SEXE "); GROUP BY extract(month from inscription.DATE_INSCRIPTION)
*/$ans =  date('Y-m-d',strtotime("-16 years"));


$result = mysql_query("SELECT count(DATE_NAISSANCE) AS Nombre_INSCRIT FROM client left join inscription on inscription.MATRICULE=client.MATRICULE
                                     WHERE DATE_NAISSANCE >='$ans' AND (inscription.DATE_INSCRIPTION BETWEEN '$dadeb' AND '$dafin')");



/*]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]*/



 /*$result1 = mysql_query("SELECT count(SEXE) AS Nombre_INSCRIT FROM client 
                                         WHERE SEXE='$f'  GROUP BY SEXE");
*/

/*$select="SELECT * FROM client WHERE DATE_NAISSANCE BETWEEN '$seize_ans' and '$treize_ans' and SEXE='Masculin' ";
*/
$result1 = mysql_query("SELECT count(DATE_NAISSANCE) AS Nombre_INSCRIT FROM client left join inscription on inscription.MATRICULE=client.MATRICULE
                                     WHERE DATE_NAISSANCE<'$ans' AND (inscription.DATE_INSCRIPTION BETWEEN '$dadeb' AND '$dafin') ");


                                  // absenc.dateabs BETWEEN '$anne1-01-01' AND '$anne2-12-31'     SELECT * FROM `client` WHERE `SEXE`="Masculin" group by extract(month from DATE_NAISSANCE)

                            ?>
            var barData = {
<?php
            $res=mysql_query("SELECT  DATE_INSCRIPTION from inscription ");
?>
                labels : ["Enfant/Adultes",],
/*               */
                datasets : [
                    {
                            
                        fillColor : "rgb(128,255,128)",
                        strokeColor : "#48A4D1",
                        data : [<?php
                while ($resultat= mysql_fetch_array($result)) {
                    echo $resultat['Nombre_INSCRIT'].",";}

?>]
                    },

                    {
                        fillColor : "rgb(0,64,128)",
                        strokeColor : "rgba(72,174,209,0.8)",


                        data : [<?php
                while ($resultat= mysql_fetch_array($result1)) {
                    echo $resultat['Nombre_INSCRIT'].",";}?>]
                    }
                ]
            }

            // get bar chart canvas
            var income = document.getElementById("income").getContext("2d");
            // draw bar chart
            new Chart(income).Bar(barData);
        </script>

        


    </body>
</html>



<!-- ::::!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!Nationalite:::::::::: -->


<?PHP

}
elseif ((isset($_POST['types']))&&($_POST['types']==3)) {
//IGITIGIRI CABIYANDIKISHIJE BOSE HARABIWE KUGITSINA  
echo "Statistique selon la nationalité";

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Statistique</title>
        <!-- import plugin script -->
        <script src='js/Chart.min.js'></script>
    </head>
    <body>
       <canvas id="income" width="300" height="200"></canvas>
        <script>
     

            <?PHP  require_once("connection.php");
            $dadeb=$_POST['dateDEB'];
          $dafin=$_POST['dateFIN'];
          $B="Burundais";
          $E="Etranger";

                                /*$result = mysql_query("SELECT count(client.SEXE) AS Nombre_INSCRIT FROM client, 
                                     inscription WHERE SEXE='$m'  GROUP BY extract(month from inscription.DATE_INSCRIPTION)");
*/

/*
$result = mysql_query("SELECT count(SEXE) AS Nombre_INSCRIT FROM client
                                     WHERE SEXE='$m' GROUP BY SEXE "); GROUP BY extract(month from inscription.DATE_INSCRIPTION)
*/

$result = mysql_query("SELECT count(NATIONALITE) AS Nombre_INSCRIT FROM client left join inscription on inscription.MATRICULE=client.MATRICULE
                                     WHERE NATIONALITE='$B' AND (inscription.DATE_INSCRIPTION BETWEEN '$dadeb' AND '$dafin') GROUP BY NATIONALITE");



/*]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]*/



 /*$result1 = mysql_query("SELECT count(SEXE) AS Nombre_INSCRIT FROM client 
                                         WHERE SEXE='$f'  GROUP BY SEXE");
*/
$result1 = mysql_query("SELECT count(NATIONALITE) AS Nombre_INSCRIT FROM client left join inscription on inscription.MATRICULE=client.MATRICULE
                                     WHERE NATIONALITE='$E' AND (inscription.DATE_INSCRIPTION BETWEEN '$dadeb' AND '$dafin') GROUP BY NATIONALITE");


                                  // absenc.dateabs BETWEEN '$anne1-01-01' AND '$anne2-12-31'     SELECT * FROM `client` WHERE `SEXE`="Masculin" group by extract(month from DATE_NAISSANCE)

                            ?>
            var barData = {
<?php
            $res=mysql_query("SELECT  DATE_INSCRIPTION from inscription ");
?>
                labels : ["Burundais/Etranger",],
/*               */
                datasets : [
                    {
                            
                        fillColor : "rgb(128,255,128)",
                        strokeColor : "#48A4D1",
                        data : [<?php
                while ($resultat= mysql_fetch_array($result)) {
                    echo $resultat['Nombre_INSCRIT'].",";}

?>]
                    },

                    {
                        fillColor : "rgb(0,64,128)",
                        strokeColor : "rgba(72,174,209,0.8)",


                        data : [<?php
                while ($resultat= mysql_fetch_array($result1)) {
                    echo $resultat['Nombre_INSCRIT'].",";}?>]
                    }
                ]
            }

            // get bar chart canvas
            var income = document.getElementById("income").getContext("2d");
            // draw bar chart
            new Chart(income).Bar(barData);
        </script>

        


    </body>
</html>



<?PHP

}else{
/*;;;;;;;;;;;;;;;;;;;; Affichage acceuille;;;;;;;;;;;;;;;;;;;;;;;;*/
  /*echo "hohohohoh";*/
}




?>
</div>
</div><?php include ("pied.php");?>
</div>
</body>
</html>        