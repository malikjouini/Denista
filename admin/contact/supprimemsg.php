<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$id=$_GET['id'];
$req="delete from contact where id_contact='$id'";
$res=mysql_query($req) or die ("echec.".mysql_error());
header("location:http://127.0.0.1/projet_2020/admin/contact/index.php");
?>