<!DOCTYPE html>
<html xml:lang="fr">
<head>
<title>Comparateur</title>
</head>
<body>

<?php
// je recupère les données de ma liste de choix
$NombreDeJour = $_POST['NbDeJour'];
// 
if ($NombreDeJour=='janvier' || $NombreDeJour=='mars' || $NombreDeJour=='mai' || $NombreDeJour=='juillet'|| $NombreDeJour=='aout' || $NombreDeJour=='octobre'|| $NombreDeJour=='decembre') {
	echo 'il y a 31 jours';
}
elseif ($NombreDeJour=='avril'|| $NombreDeJour=='juin'|| $NombreDeJour=='septembre'|| $NombreDeJour=='novembre'){
 	echo 'il y a 30 jours';
}
else {
	echo 'il y a 28 jours';
}

?>
</body>
</html>