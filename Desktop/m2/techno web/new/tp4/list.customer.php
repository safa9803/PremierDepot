<?php
	echo "<table id=\"client\">
	  <tr>
	    <th>Numéro</th>
	    <th>Nom</th>
	    <th>Prénom</th>
   	     <th>Mail</th>
	    <th>Date de naissance</th>
	    <th>Adrese</th>	
		<th>Pays</th>
		<th>Mot de passe</th>		
	  </tr>";
	  $server = 'localhost';
	  $user = 'root';
	  $base = 'tp4';
	  $pass = 'root';
	$mysqli = new mysqli($server, $user, $pass, $base);
  	 	if ($mysqli->connect_error) 
      	die('Erreur de connexion ('.$mysqli->connect_errno.')'. $mysqli->connect_error);
   $requete = "SELECT* FROM `client`";
   $resultat = $mysqli->query ($requete);   
	 
   While ($ligne = $resultat->fetch_row()) {


    		echo" <tr>
    					<td>$ligne[0]</td>
	    				<td>$ligne[1]</td>
	    				<td>$ligne[2]</td>
	    				<td>$ligne[3]</td>
   	    			    <td>$ligne[4]</td>
 	    				<td>$ligne[5]</td>	
						 <td>$ligne[6]</td>
						 <td>$ligne[7]</td>
						 
					
	  				</tr>";
   	}	
   $mysqli->close();
   echo "</table>";
?>