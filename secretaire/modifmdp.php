<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$id_sec=$_GET['id'];
$password=$_POST['password'];
$nvpassword=$_POST['nvpassword'];
$req="select password from secretaire where id_sec=$id_sec && password='$password'";
$res=mysql_query($req) or die ("echec1");
$n=mysql_num_rows($res);
if ($n==0)
{
    echo"<script>alert('mot de pase incorrect')</script>";
}
else{
    $req4="update secretaire set password='$nvpassword' where id_sec='$id_sec'";
    $res4=mysql_query($req4) or die ("echec2");
    header("location:http://127.0.0.1/projet_2020/secretaire/setting.php?id=$id_sec");
}
?>