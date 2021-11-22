<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$id=$_GET['id'];
$id_sec=$_GET['id_sec'];
$id_dent=$_GET['id_dent'];
$req="update rendez_vous set etat='accepter' where id_rnv='$id'";
$res=mysql_query($req) or die ("echec".mysql_error());
header("location:http://127.0.0.1/projet_2020/secretaire/listes.php?id=$id_sec&&id_dent=$id_dent");
?>
