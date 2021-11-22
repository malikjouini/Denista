<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$id=$_GET['id'];
$id_dent=$_GET['id_dent'];
$req="update rendez_vous set etat='accepter' where id_rnv='$id'";
$res=mysql_query($req) or die ("echec".mysql_error());
header("location:listes.php?id=$id_dent");
?>
