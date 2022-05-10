<?php 

/* 
Pour que des guillemets ne soient pas considérés comme de la syntaxe PHP, antislash juste avant \" Coucou \"
Le point et guillemets signifie de faire un lien entre 2 variables.' '.

Déclarer variable : $variableSuper;
Déclarer fonction : fonction(a,b,c);
*/

$direBonjour = "Bonjour aux habitants du";
$destination = "Maroc ! <br /><br />";

echo $direBonjour.' '.$destination;


/* 
Opérateurs : 
	+= permet de dire "ajouter et donner le résultat"
*/

$premierNombre = 5;
$deuxièmeNombre = 15;

echo $premierNombre * $deuxièmeNombre;

echo $premierNombre += 8;

/*
Tableaux :
	utiliser fonction array;
	'clé' => valeur,
	utiliser élément tableau : $tableau['clé'];
*/

$identiteA = array
(
	'id' 	 => 4,
	'prenom' => 'Nicolas',
	'nom'    => 'Dupont',
	'age'    => 20
);

echo 'Bonjour '.$identiteA['prenom'].' '.$identiteA['nom'].' !';

$identiteB = array(5, 'Leyth', 'Kouddane', 3);

/* Quand le tableau est écrit ainsi, les id attribués automatiquement sont 0, 1, 2, 3 donc */

echo 'Bonjour '.$identiteB['1'].' '.$identiteB['2'].' !';



$tableau = array
(
'id' => 1,
'prenom' => 'Isaac',
'nom' => 'Newton',
'age' => 100
);

$ageDans50Ans = $tableau['age'] + 50;

echo 'Bonjour '.$tableau['prenom'].' '.$tableau['nom'].' ! Dans 50 ans, vous aurez '.$ageDans50Ans.' ans.';

// Conditions : if (condition) {application}

$age = 18;

if ($age >= 18){
echo "Vous êtes majeur.";
}

if ($age < 18) {
echo "Vous êtes mineur.";
}

if($age == 18) {

	echo "Vous êtes enfin majeur.";
}

/* 
Pour éviter que le "égal" soit interprété comme l'affectation d'une valeur à une variable, ==. (Le résultat doit être = à un chiffre dans la condition).
<= inférieur ou égal
>= supérieur ou égal
!= est différent de
*/

$pseudo = "Tintin";
$mdp = "Lune589";

if ($pseudo == "Tintin" && $mdp == "Lune589") {

	echo "Mot de passe valide.";
}

/* 
Double condition : 
on ajoute l'une à l'autre en écrivant AND ou &&, OR ou || (autre choix)
*/

/* Condition ternaire, condition d'affectation => 
(condition) ? succès : résultat; */

$number = 10;

echo ($number % 10 == 0) ? 'true' : 'false';

// On place l'action avant, (condition) ? 'action si c'est vrai' : 'action si c'est faux';

if ($pseudo == "Tintin" AND $mdp == "Lune589") {

	echo "Mot de passe valide.";

} else {

	echo "Mot de passe invalide.";

}


if ($age > 18) {

	echo "Vous êtes majeur.";

} else if ($age == 18) {

	echo "Vous êtes enfin majeur !";

} else {

	echo "Vous êtes mineur.";

}

/* Conditions pour tester des égalités, possibilités multiples */

$note = 20;

switch ($note) {
	case 0:
		echo 'Vous avez eu 0.';

	case 10:
		echo 'Vous avez eu la moyenne.';

	case 15:
		echo 'Bravo, belle note ! 15.';

	case 20:
		echo 'Félicitations, vous avez eu 20.';

		break;
	
	default:
	    echo 'Votre note est hors-normes.';
		break;
}

// Conditions simples, pas besoin d'accolades !!!

$number = 10;

if ($number == 10)
	echo 'vrai !<br /><br />';
 else 
	echo 'faux !<br /><br />';

// Boucle WHILE

$ligne = 0;

while ($ligne <= 9) {
	echo 'Voici la ligne '.($ligne+1).'<br />';
	$ligne++;
}



?>