<?php
session_start();

// Récupération des données du formulaire
$email = $_POST['email'];
$mdp = $_POST['mdp'];



// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=chronoflop;charset=utf8','root','');

// Vérification si l'email est déjà présent dans la base de données
$req_verif = $bdd->prepare('SELECT COUNT(*) as nb_emails FROM inscription WHERE email = :email');
$req_verif->execute(array(
	'email' => $email
));
$donnees = $req_verif->fetch();
$nb_emails = $donnees['nb_emails'];

if($nb_emails == 0) {
	// Insertion des données dans la table utilisateurs
	$req = $bdd->prepare('INSERT INTO inscription (email, mdp) VALUES (:email, :mdp)');
	$req->execute(array(
	'email' => $email,
	'mdp' => $mdp
	));

// Stockage des données dans la variable de session
$_SESSION['email'] = $email;

// Redirection vers la page de succès
header('Location: inscription_succes.php');
exit();
}
	else {
	// Si l'email est déjà présent dans la base de données, on redirige vers la page d'erreur
	header('Location: inscription_erreur.php');
	exit();
}
?>