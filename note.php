<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$idcab=$_GET['id_cab'];
$idpat=$_GET['id_pat'];
$note=$_POST['star'];
$note1=$_POST['star'];
$note2=$_POST['star'];
$note3=$_POST['star'];
$note4=$_POST['star'];
$id_cab=$_POST['idcab'];
$id_pat=$_POST['idpat'];
$req="insert into note values('','$note','$note1','$note2','$note3','$note4','$id_pat','$id_cab')";
$res=mysql_query($req) or die ("echec");
header("location:http://127.0.0.1/projet_2020/blog-single.php?id_cab=$idcab&&id_pat=$idpat");

?>