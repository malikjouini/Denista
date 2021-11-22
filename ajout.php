<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$a=$_POST['Nom'];
$b=$_POST['prenom'];
$c=$_POST['login'];
$d=$_POST['password'];
$e=$_POST['number'];
$req="insert into patient values('','$a','$b','$c','$d','$e')";
$res=mysql_query($req)or die("echec".mysql_error());
$req1="select MAX(id_pat) from patient";
$res1=mysql_query($req1) or die("echec1".mysql_error());
$s1=mysql_fetch_array($res1);
header ("location:http://127.0.0.1/projet_2020/index1.php?id_pat=$s1[0]");
?>
