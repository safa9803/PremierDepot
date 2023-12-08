<!doctype html>
<html lang="fr">
<HEAD>
	<title> Composants Electroniques </title>
	<link href="style.css" media="all" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
	<header> 
	<H3><CENTER> Espace administrateur <CENTER></H3> 
	</header>
	
	
	<nav>
	<ul>
  		<li><a href="index.php?op=list">Liste des clients</a></li>
        <li><a href="index.php?op=add">Ajouter un clients</a></li>
		<li><a href="index.php?op=upd">Modifier un client</a></li>
	</ul>
</nav>

	
	<article>
		<?php 
		      switch($_GET['op']) {
		      	case 'list': include "list.customer.php" ;  break;
		      	case 'add': include "add.customer.php" ; 	break;
				case 'upd': include "upd.customer.php" ; 	break;
				   default : include "list.customer.php" ; 
				}   
		?>
	</article>
	
	<footer>
	
	</footer>
</BODY>
</html>