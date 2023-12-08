<?php
if ($_GET['op']=='add' && $_POST) {
  $server = 'localhost';
$user = 'root';
$base = 'tp4';
$pass = 'root';
	$mysqli = new mysqli($server, $user, $pass, $base);
  	if ($mysqli->connect_error) 
      	die('Erreur de connexion ('.$mysqli->connect_errno.')'. $mysqli->connect_error);
   $requete = "INSERT INTO client VALUES('$_POST[num]','$_POST[nom]','$_POST[prenom]','$_POST[mail]','$_POST[dateNaiss]','$_POST[adresse]','$_POST[pays]', '$_POST[password1]')";
   $resultat = $mysqli->query ($requete);  
   
   if(!$resultat) echo 'Erreur d\'insertion'; 
   else echo 'Nouveau client insere dans la base de donnees<br>';
   $mysqli->close();
} 
 // Formulaire pour l'insertion d'un nouvel composant

 echo "<form method='post' action='index.php?op=add'>  
        <p><label for='num'> Numéro du mobile :</label> <input type='text' name='num' placeholder='N° mobile' id='num'/> </p>
       <p><label for='nom'> Nom :</label> <input type='text' name='nom' placeholder='Nom' id='nom'/> </p>
       <p><label for='prenom'> Prénom :</label> <input type='text' name='prenom' placeholder='Prénom' id='prenom'/> </p>
       <p><label for='mail'> Email :</label> <input type='text' name='mail' placeholder='Email' id='mail'/> </p>
       <p><label for='dateNaiss'> Date de naissance :</label> <input type='date' name='dateNaiss' placeholder='Date de naissance' id='dateNaiss'/> </p>
       <p><label for='adresse'> Adresse :</label> <input type='text' name='adresse' placeholder='N° rue ' id='adresse'/> </p>
     
       <p><label for='pays'>Pays</label>
        <select name='pays' id='pays'>
            <option value='none'>--None--</option>
            <option value='algerie'>Algérie</option>
            <option value='tunisie'>Tunisie</option>
            <option value='maroc'>Maroc</option>
        </select></p>
     

          
      <p><label for='password1'>Mot de passe :</label> <input type='password' name='password1'  placeholder='xxxxxx' id='password1'/> </p>
      <p><label for='password2'>Confirmer votre mot de passe :</label> <input type='password2' name='password2' placeholder='xxxxxx' id='password2'/> </p>
      <p> <input type='submit'  value= 'Valider'   name = 'valider' id='valider' /></p> 
       
    </form>";

?>