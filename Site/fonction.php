<?php

	function fBdd() {
		$bdd = new PDO('mysql:host=localhost;dbname=db_algobreizh;charset=utf8','root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	  return $bdd;
	}

	

?>