<?php
$server = 'localhost';
$user = 'root';
$base = 'tp4';
$pass = 'root';

$mysqli=new mysqli($serveur, $user, $pass, $base)
$mysqli->set_charset("utf8")
 if ($mysqli->connect_error){
         die('erreur de connexion ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
 }
 $sql="INSERT INTO client VALUES
 ('$_POST[num]','$Post[nom]','$Post[prenom]','$Post[mail]','$Post[datNais]','$Post[adresse]','$Post[pays]','$Post[motPasse]
 $resultat=$mysqli->query($sql);
 if(!$resultat)echo 'Erreur d\'insertion';
 else echo'client ajouter dans la base do données<br>';
 $mysqli->close()
 ?>