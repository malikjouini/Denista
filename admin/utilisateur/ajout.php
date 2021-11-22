<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$n=$_POST['nom'];
$pr=$_POST['pr'];
$l=$_POST['l'];
$pwd=$_POST['p'];
$f=$_POST['fonction'];
$profil=$_POST['profil'];
$req="insert into user values ('','$n','$pr','$l','$pwd','$f','$profil')";
$res=mysql_query($req) or die ("echec");
header("location:index.php");?>

