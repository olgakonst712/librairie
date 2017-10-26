<?php

function debug($var){
	echo "<pre>";
	print_r($var);
	echo "</pre>";
}

$cfg_file = dirname( dirname(__FILE__) ).DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php';
include $cfg_file;

$dbconfig = $config['database'];

try{

// A changer : dbname=nomDeVotreBaseDeDonnées
$bdd = new PDO("mysql:host=".$dbconfig['dbhost'].";dbname=".$dbconfig['dbname'].";charset=utf8", $dbconfig["dbuser"], $dbconfig["dbpass"]);
}
// On traite l'erreur (ex probleme de mot de passe, php rsique d'afficher
// toute la ligne. Pour éviter ce problème : )
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
// Notre requete à la base de donnée
// SELECT = prend moi; * = tout ;FROM = de quel tableau ? film = mettreLeNomDeVotreTable

if (isset($_GET['genre'])){
	$query = $bdd->query('SELECT * FROM film WHERE `film_genre`="'. $_GET['genre'] .'"' );

} else {
	$query = $bdd->query('SELECT * FROM film');

}




$films = $query->fetchAll();
//$imgGalerie = $bdd->query('SELECT * FROM photos LIMIT 50');


?>
