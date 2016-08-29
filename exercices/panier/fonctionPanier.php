<!DOCTYPE html>
<html xml:lang="fr">
<head>
<title>Votre panier</title>
</head>
<body>

<?php

$prix_produit1 = $_POST['prixHt1']+($_POST['prixHt1']*$_POST['tva1']/100)*$_POST['quantite1'];
echo 'Prix produit 1 : '.$prix_produit1. ' euros <br/>';


$prix_produit2 = $_POST['prixHt2']+($_POST['prixHt2']*$_POST['tva2']/100)*$_POST['quantite2'];
echo 'Prix produit 2 : '.$prix_produit2. ' euros <br/>';

$prix_produit3 = $_POST['prixHt3']+($_POST['prixHt3']*$_POST['tva3']/100)*$_POST['quantite3'];
echo 'Prix produit 3 : '.$prix_produit3. ' euros <br/> <br/>';


$total = $prix_produit1+$prix_produit2+$prix_produit3;
echo 'Total du panier : '.$total. ' euros';

?>
</body>
</html>