<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$login=$_POST['login'];
$id_dent=$_GET['id'];
$req2="update user set login='$login' where id_user=$id_dent";
$res2=mysql_query($req2) or die ("echec1".mysql_error());
header("location:http://127.0.0.1/projet_2020/dentiste/setting.php?id=$id_dent");
?>