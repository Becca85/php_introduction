<!DOCTYPE html>
<html xml:lang="fr">
<head>
<title>Date de naissance</title>
</head>
<body>

<?php
$date = $_POST['date'];
list($jour, $mois, $annee) = explode('/', $date);
if(checkdate($mois,$jour,$annee))
{
  echo "date valide";
}
else
{
  echo "date non valide";
}


?>
</body>
</html>