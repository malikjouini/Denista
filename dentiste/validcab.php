<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$id=$_POST['idcab'];
$nom=$_POST['NomdeCabinet'];
$ad=$_POST['Adresse'];
$timedov=$_POST['Horairedouverture'];
$timedef=$_POST['Horairedefermeture'];
$num=$_POST['Numerofix'];
$bio=$_POST['bio'];
$id_dent=$_POST['id_dent'];
$req="update cabinet set nomdecabinet='$nom',adresse='$ad',horairedoverture	='$timedov',horairedefermeture='$timedef',numfix='$num',bio='$bio',id_dent='$id_dent' where id_cab='$id'";
$res=mysql_query($req)or die ("echec".mysql_error());
header("location:http://127.0.0.1/projet_2020/dentiste/cabinet.php?id=$id_dent");
?>