<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$id_sec=$_GET['id'];
$id=$_POST['id'];
$img=$_POST['f'];
$nom=$_POST['name'];
$prenom=$_POST['prenom'];
$dent=$_POST['dentiste'];
$ad=$_POST['adresse'];
$num=$_POST['num'];
$bio=$_POST['bio'];
$req="update secretaire set nom='$nom',prenom='$prenom',dentiste='$dent',adresse='$ad',numero='$num',bio='$bio',image='$img' where id_sec='$id'";
$res=mysql_query($req)or die ("echec".mysql_error());
header("location:index1.php?id=$id_sec");
?>