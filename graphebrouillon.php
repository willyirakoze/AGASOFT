<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Statistique</title>
        <!-- import plugin script -->
        <script src='js/Chart.min.js'></script>
    </head>
    <body>
        <!-- line chart canvas element -->
        <!-- <canvas id="buyers" width="600" height="400"></canvas> -->
        <!-- pie chart canvas element -->
       <!--  <canvas id="countries" width="600" height="400"></canvas> -->
        <!-- bar chart canvas element -->
        <canvas id="income" width="600" height="400"></canvas>
        <script>
            // line chart data
           /* var buyerData = {
                labels : ["January","February","March","April","May","June"],
                datasets : [
                {
                    fillColor : "rgba(172,194,132,0.4)",
                    strokeColor : "#ACC26D",
                    pointColor : "#fff",
                    pointStrokeColor : "#9DB86D",
                    data : [203,156,99,251,305,247]
                }
            ]
            }*/
            // get line chart canvas
            //var buyers = document.getElementById('buyers').getContext('2d');
            // draw line chart
            //new Chart(buyers).Line(buyerData);
            // pie chart data
            /*var pieData = [
                {
                    value: 20,
                    color:"#878BB6"
                },
                {
                    value : 40,
                    color : "#4ACAB4"
                },
                {
                    value : 10,
                    color : "#FF8153"
                },
                {
                    value : 30,
                    color : "#FFEA88"
                }
            ];*/
            // pie chart options
            /*var pieOptions = {
                 segmentShowStroke : false,
                 animateScale : true
            }*/
            // get pie chart canvas
            //var countries= document.getElementById("countries").getContext("2d");
            // draw pie chart
            //new Chart(countries).Pie(pieData, pieOptions);
            // bar chart data             
//  LEFT JOIN inscription  ORDER BY Nombre_INSCRIT DESC


            <?PHP  require_once("connection.php");
          $m="Masculin";
          $f="Feminin";

                                /*$result = mysql_query("SELECT count(client.SEXE) AS Nombre_INSCRIT FROM client, 
                                     inscription WHERE SEXE='$m'  GROUP BY extract(month from inscription.DATE_INSCRIPTION)");
*/
$result = mysql_query("SELECT count(client.SEXE) AS Nombre_INSCRIT FROM client, 
                                     inscription WHERE SEXE='$m'  GROUP BY extract(month from inscription.DATE_INSCRIPTION)");
/*]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]*/



 $result1 = mysql_query("SELECT count(client.SEXE) AS Nombre_INSCRIT FROM client, 
                                     inscription WHERE SEXE='$f'  GROUP BY extract(month from inscription.DATE_INSCRIPTION)");



                                  // absenc.dateabs BETWEEN '$anne1-01-01' AND '$anne2-12-31'     SELECT * FROM `client` WHERE `SEXE`="Masculin" group by extract(month from DATE_NAISSANCE)

                            ?>
            var barData = {
<?php
            $res=mysql_query("SELECT  DATE_INSCRIPTION from inscription ");
?>
                labels : [<?php
                while ($resulta= mysql_fetch_array($res)) {
                    echo $resulta['DATE_INSCRIPTION'].",";}

?>],
/*               "January","February","March","April","May","June","July","August","September","October","November","December"
*/
                datasets : [
                    {
                            
                        fillColor : "#48A497",
                        strokeColor : "#48A4D1",
                        data : [<?php
                while ($resultat= mysql_fetch_array($result)) {
                    echo $resultat['Nombre_INSCRIT'].",";}

?>]
                    },

                    {
                        fillColor : "rgba(73,188,170,0.4)",
                        strokeColor : "rgba(72,174,209,0.4)",


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

        <label>Fille= vert</label><?php
                while ($resultat= mysql_fetch_array($result)) {
                    echo $resultat['Nombre_INSCRIT'].",";}

?>
    </body>
</html>
