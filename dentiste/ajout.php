<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
 $id_dent=$_GET['id'];
 $b=$_POST['name'];
 $c=$_POST['prenom'];
 $d=$_POST['cabinet'];
 $e=$_POST['adresse'];
 $f=$_POST['num'];
 $g=$_POST['bio'];
 $j=$_POST['sp'];
 $k=$_POST['sp1'];
 $l=$_POST['sp2'];
 $m=$_POST['sp3'];
 $n=$_POST['sp4'];
 $o=$_POST['sp5'];
 $p=$_POST['sp6'];
 $lib= addslashes($_FILES["img"]["name"]);
 $lien = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
 $iduser=$_POST['iduser'];
 $req="insert into dentiste values('','$b','$c','$d','$e','$f','$g','$j','$k','$l','$m','$n','$o','$p','$lib','$lien','$iduser')";
$res=mysql_query($req) or die ("echec");
$req1="update user set profil='1' where id_user=$id_dent";
$res1=mysql_query($req1) or die ("echec1");
$req2="select* from dentiste where id_user=$id_dent";
$res2=mysql_query($req2) or die ("echec2");
$s=mysql_fetch_array($res2);
header ("location:http://127.0.0.1/projet_2020/dentiste/index1.php?id=$id_dent&&id_profil=$s[0]");
?>
