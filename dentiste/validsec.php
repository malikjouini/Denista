<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$id=$_POST['idsec'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$dentiste=$_POST['dentiste'];
$adresse=$_POST['adresse'];
$num=$_POST['Numerofix'];
$login=$_POST['login'];
$password=$_POST['password'];
$bio=$_POST['bio'];
$id_dent=$_GET['id'];
$req="update secretaire set nom='$nom',prenom='$prenom',dentiste='$dentiste',adresse='$adresse',numero='$num',login='$login',password='$password',bio='$bio' where id_sec='$id'";
$res=mysql_query($req)or die ("echec".mysql_error());
header("location:http://127.0.0.1/projet_2020/dentiste/profilsec.php?id=$id_dent");
?>