<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$id_dent=$_GET['id'];
$req="select* from rendez_vous R,cabinet C where C.id_cab=R.id_cab and C.id_dent=$id_dent";
$res=mysql_query($req) or die ("echec".mysql_error());
$req1="delete from rendez_vous where etat='accepter'";
$res1=mysql_query($req1) or die ("echec1");
header("location:accepter.php?id=$id_dent");
?>