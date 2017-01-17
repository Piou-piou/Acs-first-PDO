<?php
	require_once("connexion.config.php");
	
	try {
		$dbc = new PDO("mysql:host=".$dbhost.";dbname=".$dbname, $dbuser, $dbpass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	}
	catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
	
	$query = $dbc->query("SELECT * FROM departements");
	$resultats = $query->fetchAll();
	
	foreach ($resultats as $res) {
		echo($res["nom_departement"]."<br>");
	}
	
	for ($i=0 ; $i<count($resultats) ; $i++) {
		echo($resultats[$i]."<br>");
	}
	
	while ($resultat = $query->fetch()) {
		echo $resultat["nom_departement"];
	}