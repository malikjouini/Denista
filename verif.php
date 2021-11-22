<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$a=$_POST['login'];
$b=$_POST['password'];
$req="select* from user where login='$a' && password='$b'";
$res=mysql_query($req) or die("echec");
$n=mysql_num_rows($res);
$s=mysql_fetch_array($res);

$req1="select* from patient where login='$a' && password='$b'";
$res1=mysql_query($req1) or die("echec");
$n1=mysql_num_rows($res1);
$s1=mysql_fetch_array($res1);

$req2="select* from secretaire where login='$a' && password='$b'";
$res2=mysql_query($req2) or die("echec");
$n2=mysql_num_rows($res2);
$s2=mysql_fetch_array($res2);

if ($n==0 && $n1==0 && $n2==0)
header("location:http://127.0.0.1/projet_2020/index.php");
else
{
if($s[5]=="admin")
{
header("location:http://127.0.0.1/projet_2020/admin/index.html");
}
if($s[5]=="dentiste" && $s[6]==0)

header("location:http://127.0.0.1/projet_2020/dentiste/index.php?id=$s[0]");
else
{
    header("location:http://127.0.0.1/projet_2020/dentiste/index1.php?id=$s[0]");
}
    
 if($n2==1)
{
    
header("location:http://127.0.0.1/projet_2020/secretaire/index1.php?id=$s2[0]");
}
if($n1==1)
{

    header("location:http://127.0.0.1/projet_2020/index1.php?id_pat=$s1[0]");
}

}
?> 