<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$date=$_POST['date'];
$time=$_POST['time'];
$num=$_POST['num'];
$id_cab=$_POST['id_cab'];
$id_pat=$_POST['id_pat'];
$etat=$_POST['etat'];
$id=$_GET['id_cab'];
$id1=$_GET['id_pat'];
$req1="insert into rendez_vous values ('','$nom','$prenom','$email','$date','$time','$num','$id_pat','$id_cab','$etat')";
$res1=mysql_query($req1) or die ("echec1".mysql_error());
header("location:http://127.0.0.1/projet_2020/blog-single.php?id_cab=$id&&id_pat=$id1");
?>


