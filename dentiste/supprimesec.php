<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$id_sec=$_GET['id_sec'];
$id_dent=$_GET['id'];
$req="delete from secretaire where id_sec='$id_sec'";
$res=mysql_query($req) or die ("echec");
header("location:http://127.0.0.1/projet_2020/dentiste/secretaire.php?id=$id_dent");
?>
