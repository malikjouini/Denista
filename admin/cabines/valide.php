<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$id=$_POST['id'];
$a=$_POST['nom'];
$b=$_POST['adresse'];
$c=$_POST['ho'];
$d=$_POST['hf'];
$e=$_POST['nf'];
$g=$_POST['bio'];
$h=$_POST['dent'];
$req="update cabinet set nomdecabinet='$a',adresse='$b',horairedoverture='$c',horairedefermeture='$d',numfix='$e',bio='$g',id_dent='$h' where id_cab='$id'";
$res=mysql_query($req) or die ("echec".mysql_error());
header("location:index.php");
?>
