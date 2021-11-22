<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$a=$_POST['nom'];
$b=$_POST['adresse'];
$c=$_POST['do'];
$d=$_POST['df'];
$e=$_POST['nf'];
$g=$_POST['bio'];
$dent=$_POST['dent'];
$lib= addslashes($_FILES["img"]["name"]);
 $lien = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
$req="insert into cabinet values ('','$a','$b','$c','$d','$e','$g','$dent','$lib','$lien')";
$res=mysql_query($req) or die ("echec".mysql_error());
header("location:index.php");?>
