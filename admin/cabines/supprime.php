<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$id=$_GET['id'];
$req="delete from cabinet where id_cab='$id'";
$res=mysql_query($req) or die ("echec");
header("location:index.php");
?>
