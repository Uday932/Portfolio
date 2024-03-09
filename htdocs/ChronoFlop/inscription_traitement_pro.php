<?php
session_start();

// Récupération des données du formulaire
$id_entreprise = $_POST['id_entreprise'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];



// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=chronoflop;charset=utf8','root','');

// Vérification si l'email est déjà présent dans la base de données
$req_verif = $bdd->prepare('SELECT COUNT(*) as nb_emails FROM inscription_pro WHERE email = :email');
$req_verif->execute(array(
	'email' => $email
));
$donnees = $req_verif->fetch();
$nb_emails = $donnees['nb_emails'];

if($nb_emails == 0) {
	// Insertion des données dans la table utilisateurs
	$req = $bdd->prepare('INSERT INTO inscription_pro (id_entreprise, email, mdp) VALUES (:id_entreprise, :email, :mdp)');
	$req->execute(array(
    'id_entreprise'=> $id_entreprise,    
	'email' => $email,
	'mdp' => $mdp
	));

// Stockage des données dans la variable de session
$_SESSION['id_entreprise'] = $id_entreprise;
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