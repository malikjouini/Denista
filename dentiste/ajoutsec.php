<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$id_dent=$_GET['id'];
 $b=$_POST['name'];
 $c=$_POST['prenom'];
 $d=$_POST['cabinet'];
 $e=$_POST['adresse'];
 $f=$_POST['num'];
 $login=$_POST['login'];
 $pass=$_POST['pass'];
 $g=$_POST['bio'];
 $lib= addslashes($_FILES["img"]["name"]);
 $lien = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
 $req="insert into secretaire values('','$b','$c','$d','$e','$f','$login','$pass','$g','$lib','$lien')";
$res=mysql_query($req) or die ("echec");
header ("location:http://127.0.0.1/projet_2020/dentiste/profilsec.php?id=$id_dent");
?>
