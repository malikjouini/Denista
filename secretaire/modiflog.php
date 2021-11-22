<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$login=$_POST['login'];
$id_sec=$_GET['id'];
$req2="update secretaire set login='$login' where id_sec=$id_sec";
$res2=mysql_query($req2) or die ("echec1".mysql_error());
header("location:http://127.0.0.1/projet_2020/secretaire/setting.php?id=$id_sec");
?>