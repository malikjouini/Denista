<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$id_pat=$_GET['id_pat'];
$req="delete from rendez_vous where id_pat=$id_pat";
$res=mysql_query($req) or die ("echec");
header ("location:http://127.0.0.1/projet_2020/resultat.php?id_pat=$id_pat");
?>
