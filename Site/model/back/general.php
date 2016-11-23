<?php

$bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$resultat = $bdd->query('SELECT * FROM parametre');
	while ($donnees = $resultat->fetch()) {
		$tpl = $donnees['theme'];
		$url = $donnees['url'];
		$ssl = $donnees['ssl'];
		$timezone = $donnees['timezone'];
		$devise = $donnees['devise'];
	}
$resultat->closeCursor();

?>