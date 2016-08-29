<!DOCTYPE html>
<html xml:lang="fr">
<head>
<title>Stationnement Alternatif</title>
</head>
<body>

<?php
$date = $_POST['date'];
list($jour, $mois, $annee) = explode('/', $date);
$NumMaison = $_POST['numMaison'];

if(checkdate($mois,$jour,$annee) && $jour <= 15 && $NumMaison % 2 == 1)
{
  echo 'Nous sommes le ' .$jour. ' vous êtes bien garé du coté impaire';
}
elseif (checkdate($mois,$jour,$annee) && $jour > 15 && $NumMaison % 2 == 0)
{ 
  echo 'Nous sommes le ' .$jour. ' vous êtes bien garé du coté paire';
}
else {
	echo 'Vous n\'êtes pas bien garé';
}


?>
</body>
</html>