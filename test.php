<?php

$douze_ans =  date('Y-m-d',strtotime("-12 years"));
$huit_ans = date('Y-m-d',strtotime("-8 years"));

#$k=(((strtotime('Y-m-d'))-(strtotime('2014-03-04')))/86400);

if (isset($_POST['abonné']) && ($_POST['abonné']=="1") || $_POST['abonné']=="2")) {
	# code...


$debut = date('Y-m-d');
$fin ='2015-04-05';

$k=((strtotime($fin))-(strtotime($debut)))/86400;


if ($k>=30 && $k<32) {
	echo $k ."</br>". "nombre des jours";


	# puis insertion de donne de l'abonnement mansuel



}else
{
	echo "<script>

alert('verfier votre date!!!') ;

</script>";
	
}


}elseif (isset($_POST['abonné']) && ($_POST['abonné']=="3") || $_POST['abonné']=="4")) {


	# code...
}
?>