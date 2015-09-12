<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>AGAS</title>
</head>
 

<title>test</title>

</head> 

<body>

<script language="javascript">
 //alert ("saisir le matricule");
 function ckeckMat(){
  var val=document.incrisption.mat.value;
  if (val=="")
  	alert("le matricule n'est pas enregistrer");
 }
  function effacer(){
    
	
  document.inscription.nom.value="";
  
	}

	function test(){
    
	
   document.inscription.mat.value=document.inscription.pass.value;
  }
  
  function verif(f){
   var val=" vous avez saisi les données suivants";
       val+ ="\n Matricule:"+ f.mat.value;
	   val+ ="\n Nom:"+ f.nom.value;
	   val+ ="\n Prenom:"+ f.prenom.value;
	    var i=f.jour.selectedIndex;
		var j=f.mois.selectedIndex;
		var k= f.annee.selectedIndex;
	    val+="\n Date de naiss"+ f.jour.options[i].text+"/"+f.mois.options[j].text+"/"+f.annee.options[k].text;
	     val + ="\n lieu de naissance"+ f.lieu.value;

	alert ("vos choix"+ val);
	}
	
 </script>
 

 
  <h1 class="titre" align="center"> <i>Nouveau Client</i> </h1>
  <?php
  
  if (isset ($_REQUEST['OK'])){
    if($_REQUEST['OK']==2){
	echo "Matricule".$_REQUEST['mat'];
	echo "<br>";
	echo "Nom".$_REQUEST['nom'];
	echo "<br>";
	echo "Prenom".$_REQUEST['prenom'];
	}
}
 else {
 ?>
  <table  border="0"  align="center">
    <form method="post" action="index.php?f=formulaire" name="inscription" onSubmit="verif(inscription)" >
      <tr>
        <td class="comp"> Matricule: </td>
        <td><input type="text" name="mat" size="25" maxlength="20" value="" onBlur="ckeckMat()" ></td>
      </tr>
      <tr>
        <td class="comp"> Nom: </td>
        <td><input type="text" name="nom" size="25" maxlength="30" value="votre nom" onClick="effacer()" ></td>
      </tr>
      <tr>
        <td class="comp"> Prenom: </td>
        <td><input type="text" name="prenom" size="25" maxlength="40" value="" ></td>
      </tr>
      <tr>
        <td class="comp">E-Mail: </td>
        <td><input type="email" name="pass" size="25" maxlength="40" value="" onBlur="test()" >
        </td>
      </tr>
      <tr>
        <td class="comp">Date de naissance</td>
        <td><select name="jour">
            <option value="1">1
          <option value="2">2
          <option value="3">3
          <option value="4">4
          <option value="5">5
          <option value="6">6
          <option value="7">7
          <option value="8">8
          <option value="9">9
          <option value="10">10
          <option value="11">11
          <option value="12">12
          <option value="13">13
          <option value="14">14
          <option value="15">15
          <option value="16">16
          <option value="17">17
          <option value="18">18
          <option value="19">19
          <option value="20">20
          <option value="21">21
          <option value="22">22
          <option value="23">23
          <option value="24">24
          <option value="25">25
          <option value="26">26
          <option value="27">27
          <option value="28">28
          <option value="29">29
          <option value="30">30
          <option value="31">31 </option>
          </select>
          /
          <select name="mois">
            <option value="janvier">janvier 
            <option value="fevier">fevrier
            <option value="mars">mars
            <option value="avril">avril
            <option value="mai">mais
            <option value="juin">juin
            <option value="juillet">juillet
            <option value="aout">aout
            <option value="semptembre">semptembre
            <option value="octobre">octobre
            <option value="novembre">novembre
            <option value="decembre">decembre </option>
          </select>
          /
          <select name="annee">
          <option value="1970">1970 
            <option value="1970">1970
            <option value="1971">1971
            <option value="1972">1972
            <option value="1973">1973
            <option value="1974">1974
            <option value="1975">1975
            <option value="1976">1976
            <option value="1977">1977
            <option value="1978">1978
            <option value="1979">1979
            <option value="1980">1980 
            <option value="1981">1981
            <option value="1982">1982
            <option value="1983">1983
            <option value="1984">1984
            <option value="1985">1985
            <option value="1986">1986
            <option value="1987">1987
            <option value="1988">1988
            <option value="1989">1989
            <option value="1990">1990
            <option value="1991">1991
            <option value="1992">1992 
            <option value="1993">1993 
            <option value="1994">1994
            <option value="1995">1995
            <option value="1996">1996
            <option value="1997">1997
            <option value="1998">1998
            <option value="1999">1999
            <option value="2000">2000
            <option value="2001">2001
            <option value="2002">2002
            <option value="2003">2003
            <option value="2004">2004
            <option value="2005">2005
            <option value="2006">2006
            <option value="2007">2007
            <option value="2008">2008
            <option value="2009">2009
            <option value="2010">2010
            <option value="2011">2011
            <option value="2012">2012
            <option value="2013">2013
            <option value="2014">2014
            <option value="2015">2015
            <option value="2016">2016
            <option value="2017">2017
            <option value="2018">2018
            <option value="2019">2019
            <option value="2020">2020
            <option value="2021">2021
            <option value="2022">2022
            <option value="2023">2023
            <option value="2024">2024
            <option value="2025">2025
            <option value="2026">2026
            <option value="2027">2027
            <option value="2028">2028
            <option value="2029">2029
            <option value="2030">2030
            <option value="2031">2031</option>
          </select>
        </td>
      </tr>
      <tr>
        <td class="comp"> Lieu de naissance </td>
        <td><input type="text" name="lieu" size="25" maxlength="40" value="">
        </td>
      </tr>
      <tr>
        <td class="comp"> Sexe </td>
        <td><input type="radio" name="sexe" value="feminin" >
          masculin
          <input type="radio" name="sexe" value="masculin" checked>
          Feminin </td>
      </tr>
      <tr>
        <td class="comp" > Origine </td>
        <td><input type="radio" name="origine" value="Burundais" checked="checked">
          Burundais<br>
          <input type="radio" name="origine" value="ETRANGER" >
          ETRANGER </td>
      </tr>
      <tr>
        <td class="comp"> Filiere </td>
        <td><select name="filiere">
            <option value="Fonctionnaire"> Fonctionnaire
          <option value="Etudiant">Etudiant
          <option value="Chaumeur">Chaumeur
          <option value="Eleve">Eleve </option>
        </select></td>
      </tr>
      <tr>
        <td class="comp"> Loisirs </td>
        <td><input type="checkbox" name="Loisirs" value="" checked="checked">
          Lecture<br>
          <input type="checkbox" name="Loisirs" value="">
          Balande<br>
          <input type="checkbox" name="Loisirs" value="" checked="checked">
          Jeux<br>
          <input name="checkbox" type="checkbox" value="" nama="loisirs" >
          Music<br>
        </td>
      </tr>
      <tr>
        <td class="comp"> Photo </td>
        <td><input type="file" name="fichier"></td>
      </tr>
      <tr>
        <td class="comp"> Autres </td>
        <td><textarea name="textarea" rows="5" cols="40"> Autres informations </textarea></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr align="center">
        <td colspan="2"><input name="submit" type=submit value="Envoyer">
            <input name="reset" type=reset value="Annuler">
			<input type="hidden" value="2" name="OK" />
        </td>
      </tr>
    </form>
  </table>
  <?php
  }
  ?>
</body>
</html>

