<!DOCTYPE html>
<html xml:lang="fr">
<head>
<title>Comparateur</title>
</head>
<body>

<?php
// je recupère les données de ma page comparateur
$comparateur = array(
	$_POST['libelle1']=>$_POST['prixHt1'],
	$_POST['libelle2']=>$_POST['prixHt2'],
	$_POST['libelle3']=>$_POST['prixHt3'],
	$_POST['libelle4']=>$_POST['prixHt4'],
	);
//je fait un trie croisant de mon tableau associatif par valeur (€)
asort($comparateur);
// j'affiche le resultat
echo '<pre>';
print_r($comparateur);
echo '</pre>';
//je compte le nombre d'élément que contient mon tableau et je l'affiche
$dernierelement = count($comparateur);
echo 'j\'ai ' .$dernierelement. ' elements dans mon tableau <br/>';


//j'initialise mon compteur
$compteur = 1;
foreach ($comparateur as $key => $value) {
	if ($compteur == 1){
	echo 'le produit le moin cher est ' .$key. ' il coute ' .$value. '<br/>';
	}
	if ($compteur == $dernierelement){
	echo 'le produit le moin cher est ' .$key. ' il coute ' .$value. '<br/>';
	}
	$compteur++;
}

?>
</body>
</html>