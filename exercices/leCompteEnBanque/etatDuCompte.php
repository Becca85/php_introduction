<!DOCTYPE html>
<html xml:lang="fr">
<head>
<title>Comparateur</title>
</head>
<body>

<?php
// je recupère le montant de mon compte
$reste = $_POST['montant'];
 
 if ($reste==0) {
 	echo 'vos comptes sont équilibré, mais faites attention!';
 }
 	elseif ($reste < 0) {
 		echo 'Malheureusement, vous êtes deficitaire';
 	}
 	else {
 		echo 'Féliciation, vous êtes créditaire !';
 	}
 


?>
</body>
</html>