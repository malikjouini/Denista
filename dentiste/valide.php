<?php
mysql_connect("localhost","root","");
mysql_select_db("dent");
$id_dent=$_GET['id'];
$id_profil=$_GET['id_profil'];
$id=$_POST['idprofil'];
$img=$_POST['f'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$cab=$_POST['cabinet'];
$ad=$_POST['adresse'];
$num=$_POST['num'];
$bio=$_POST['bio'];
$sp=$_POST['sp'];
$sp1=$_POST['sp1'];
$sp2=$_POST['sp2'];
$sp3=$_POST['sp3'];
$sp4=$_POST['sp4'];
$sp5=$_POST['sp5'];
$sp6=$_POST['sp6'];
$req="update dentiste set nom='$nom',prenom='$prenom',cabinet='$cab',adresse='$ad',numfixe='$num',bio='$bio',image='$img',orthodontie='$sp',chirurgir_orale='$sp1',parodontologie='$sp2',chirurgie_maxillo_faciale='$sp3',medecine_interne_bucco_dentaire='$sp4',pedodontie='$sp5',prothese_dentaire='$sp6'    where id_dent='$id'";
$res=mysql_query($req)or die ("echec".mysql_error());
header("location:index1.php?id=$id_dent&&id_profil=$id_profil");
?>