<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$id_pat=$_GET['id_pat'];
$nom=$_POST['nom'];
$user=$_POST['user'];
$email=$_POST['email'];
$sub=$_POST['sub'];
$message=$_POST['mess'];
$id_util=$_POST['idutil'];
$req="insert into contact values ('','$nom','$user','$email','$sub','$message','$id_util')";
$res=mysql_query($req) or die("echec".mysql_error());
header("location:http://127.0.0.1/projet_2020/contact.php?id_pat=$id_pat");
?>