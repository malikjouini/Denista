<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
 $b=$_POST['name'];
 $c=$_POST['prenom'];
 $d=$_POST['cabinet'];
 $e=$_POST['adresse'];
 $f=$_POST['num'];
 $g=$_POST['bio'];
 $img=$_POST['f'];
 
 $req="insert into secretaire values('','$b','$c','$d','$e','$f','$g','$img')";
$res=mysql_query($req) or die ("echec");
header ("location:http://127.0.0.1/projet_2020/dentiste/secretaire/index1.php");
?>
