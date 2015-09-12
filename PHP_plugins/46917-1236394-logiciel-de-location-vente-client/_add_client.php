<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0014)about:internet -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>- ROSALIE CYCLES -</title>

<script type="text/javascript">
function writediv(texte)
{
document.getElementById('nombox').innerHTML = texte;
}

function verifPseudo(pseudo)
{
if(pseudo != '')
{
if(pseudo.length<2)
writediv('<span style="color:#cc0000"><b>'+pseudo+' :</b> ce nom est trop court</span>');
else if(pseudo.length>30)
writediv('<span style="color:#cc0000"><b>'+pseudo+' :</b> ce nom est trop long</span>');
else if(texte = file('add_client2.php?nom='+escape(nom)))
{
if(texte == 1)
writediv('<span style="color:#cc0000"><b>'+nom+' :</b> ce nom est deja pris</span>');
else if(texte == 2)
writediv('<span style="color:#1A7917"><b>'+nom+' :</b> - Ok - </span>');
else
writediv(texte);
}
}

}

function file(fichier)
{
if(window.XMLHttpRequest) // FIREFOX
xhr_object = new XMLHttpRequest();
else if(window.ActiveXObject) // IE
xhr_object = new ActiveXObject("Microsoft.XMLHTTP");
else
return(false);
xhr_object.open("GET", fichier, false);
xhr_object.send(null);
if(xhr_object.readyState == 4) return(xhr_object.responseText);
else return(false);
}
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
td img {display: block;}body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
}
a {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #666666;
	font-weight: bold;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #666666;
}
a:hover {
	text-decoration: none;
	color: #F78B8B;
}
a:active {
	text-decoration: none;
	color: #666666;
}
.Style2 {color: #FF0000; font-size: 12px;}
.Style3 {	font-size: 18px;
	font-weight: bold;
}
.prix {	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #FF0000;
	background-color: #CCCCCC;
}
</style>
<!--Fireworks 8 Dreamweaver 8 target.  Created Thu Jun 05 22:14:51 GMT+0200 2008-->
</head>
<body bgcolor="#ffffff">
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
<!-- fwtable fwsrc="Sans titre" fwbase="index.jpg" fwstyle="Dreamweaver" fwdocid = "197084870" fwnested="0" -->
  <tr>
   <td><img src="images/spacer.gif" width="7" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="282" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="12" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="83" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="32" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="199" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="188" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="89" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="8" height="1" border="0" alt="" /></td>
   <td><img src="images/spacer.gif" width="1" height="1" border="0" alt="" /></td>
  </tr>

  <tr>
   <td colspan="9"><img name="index_r1_c1" src="images/index_r1_c1.jpg" width="900" height="42" border="0" id="index_r1_c1" usemap="#m_index_r1_c1" alt="" /></td>
   <td><img src="images/spacer.gif" width="1" height="42" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="5" rowspan="2" valign="top"><img name="index_r2_c1" src="images/index_r2_c1.jpg" width="416" height="57" border="0" id="index_r2_c1" alt="" /></td>
   <td bgcolor="#FFFFCB">&nbsp;On est le 
    <?php 
	$date = date("Y-m-d"); 
	echo $date; 
	?></td>
   <td colspan="3" rowspan="3" valign="top"><img name="index_r2_c7" src="images/index_r2_c7.jpg" width="285" height="94" border="0" id="index_r2_c7" alt="" /></td>
   <td><img src="images/spacer.gif" width="1" height="31" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2"><img name="index_r3_c6" src="images/index_r3_c6.jpg" width="199" height="63" border="0" id="index_r3_c6" alt="" /></td>
   <td><img src="images/spacer.gif" width="1" height="26" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="5"><img name="index_r4_c1" src="images/index_r4_c1.jpg" width="7" height="669" border="0" id="index_r4_c1" alt="" /></td>
   <td rowspan="4" valign="top" background="images/index_r4_c2.jpg"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="5">
     <tr>
       <td width="20" height="100%"><img src="kfm_home.png" width="32" height="32" /></td>
       <td><a href="index.php">Accueil - / Caisse / </a></td>
     </tr>
   </table>
     <table width="90%" border="0" align="center" cellpadding="0" cellspacing="5">
       <tr>
         <td width="20" height="100%"><img src="kdmconfig.png" width="32" height="32" /></td>
         <td><div align="left"><a href="_add_client.php">Nouveau client </a></div></td>
       </tr>
     </table>
     <table width="90%" border="0" align="center" cellpadding="0" cellspacing="5">
       <tr>
         <td width="20" height="100%"><img src="Preview.png" width="32" height="32" /></td>
         <td><a href="photos.php">Lier une  C-I à un client </a></td>
       </tr>
     </table>
     <table width="90%" border="0" align="center" cellpadding="0" cellspacing="5">
       <tr>
         <td width="20" height="100%"><img src="Standby.png" width="32" height="32" /></td>
         <td><a href="retours.php">Les retours d'aujourd'hui </a></td>
       </tr>
     </table>
     <table width="90%" border="0" align="center" cellpadding="0" cellspacing="5">
       <tr>
         <td width="20" height="100%"><img src="Run2.png" width="32" height="32" /></td>
         <td><a href="entretiens.php">Les entretiens journée </a></td>
       </tr>
     </table>
     <p></p>
     <p></p>
     <p>&nbsp;</p>
     <hr />
     <div align="center" class="Style2"></div>
     <br /></td>
   <td colspan="3" valign="top"><img name="index_r4_c3" src="images/index_r4_c3.jpg" width="127" height="37" border="0" id="index_r4_c3" alt="" /></td>
   <td><img src="images/spacer.gif" width="1" height="37" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="2" rowspan="2" valign="top"><img name="index_r5_c3" src="images/index_r5_c3.jpg" width="95" height="67" border="0" id="index_r5_c3" alt="" /></td>
   <td colspan="3" align="center" valign="middle" bgcolor="#FFFFCB"><form action="recherche.php" method="get" name="form1" target="_parent" id="form1">
   <label>
   Nom du client :
   <input name="nom" type="text" id="nom" />
        </label>
            <label>
            <input type="submit" name="Submit" value="Lancer la recherche ..." />
        </label>
          </form>  </td>
   <td rowspan="2" colspan="2"><img name="index_r5_c8" src="images/index_r5_c8.jpg" width="97" height="67" border="0" id="index_r5_c8" alt="" /></td>
   <td><img src="images/spacer.gif" width="1" height="42" border="0" alt="" /></td>
  </tr>
  <tr>
   <td colspan="3"><img name="index_r6_c5" src="images/index_r6_c5.jpg" width="419" height="25" border="0" id="index_r6_c5" alt="" /></td>
   <td><img src="images/spacer.gif" width="1" height="25" border="0" alt="" /></td>
  </tr>
  <tr>
   <td rowspan="2"><img name="index_r7_c3" src="images/index_r7_c3.jpg" width="12" height="565" border="0" id="index_r7_c3" alt="" /></td>
   <td colspan="5" rowspan="2" valign="top" background="images/index_r7_c4.jpg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
     <tr>
       <td width="50" valign="top"><p></p>         <p>&nbsp;</p></td>
       <td height="561" valign="top"><form id="form1" name="form1" method="post" action="add_client2.php">
           <table width="100%" border="0" cellspacing="0" cellpadding="0">
             <tr>
               <td><hr /></td>
             </tr>
           </table>
           <table width="100%" border="0" cellspacing="0" cellpadding="0">
             <tr>
               <td height="17"><div align="center"><img src="kdmconfig.png" width="64" height="64" /></div></td>
               <td><strong>Nouveau client : </strong></td>
             </tr>
           </table>
           <table width="100%" border="0" cellspacing="0" cellpadding="0">
             <tr>
               <td><hr /></td>
             </tr>
           </table>
           <p></p>
           <p>&nbsp;</p>
           <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
             <tr>
               <td height="100" colspan="2" valign="top"><p>Client num&eacute;ro :
                 <input name="id" type="text" id="id" />
                 ( <strong>ne pas remplir la case !</strong> ) </p>
                   <hr />
                   <p>Nom :
                     <input name="nom" type="text" id="nom" onKeyUp="verifPseudo(this.value)"/>
                   </p>
                 <p>Pr&eacute;nom :
                   <input name="prenom" type="text" id="prenom" />
                 </p>
                 <hr /></td>
             </tr>
             <tr>
               <td height="15" align="center" valign="top">&nbsp;</td>
               <td width="300" height="15" align="center" valign="top">&nbsp;</td>
             </tr>
             <tr>
               <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                   <tr>
                     <td valign="top">&nbsp;</td>
                   </tr>
                   <tr>
                     <td align="center">&nbsp;</td>
                   </tr>
               </table></td>
               <td valign="top"><p>&nbsp;</p>
                  <p>&nbsp;</p></td>
             </tr>
           </table>
         <div align="center" class="Style3">Ajouter le client !
           <input name="Submit2" type="submit" class="prix" value="Ok !" />
           </div>
       </form></td>
       <td width="50">&nbsp;</td>
     </tr>
   </table>     
   <p align="left">&nbsp;</p>
    </td>
  </tr>
</table>  
    </td>
   <td rowspan="2" valign="top">&nbsp;</td>
   <td valign="top">&nbsp;</td>
  </tr>
  <tr>
   <td valign="top">&nbsp;</td>
   <td valign="top"><img src="images/spacer.gif" width="1" height="252" border="0" alt="" /></td>
  </tr>
</table>
<map name="m_index_r1_c1" id="m_index_r1_c1">
<area shape="rect" coords="709,6,900,42" href="administration.php" alt="" />
</map>
</body>
</html>
