<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$id=$_POST['id'];
$nom=$_POST['nom'];
$pr=$_POST['pr'];
$l=$_POST['l'];
$p=$_POST['p'];
$f=$_POST['fonction'];
$req="update user set nom='$nom',prenom='$pr',login='$l',password='$p',fonction='$f' where id_user='$id'";
$res=mysql_query($req) or die ("echec");
header("location:index.php");
?>
