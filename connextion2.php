<?php
session_start();

$pseudo = $_POST['pseudo'];

$pass = $_POST['password'];

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root3', '914=GE-FèR/poolm');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

//  Récupération de l'utilisateur et de son pass hashé
$req = $bdd->prepare('SELECT id, pass FROM membres WHERE pseudo = :pseudo');

$req->execute(array(
    'pseudo' => $pseudo));
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($pass , $resultat['pass']);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
		$_SESSION['erreur2']= "<p style='color:red;'> Mauvais identifiant ou mot de passe !</p>";
		header('Location: pgDoom.php');
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;


				$_SESSION['reussi']= "<p style='color:white;'> Utilisateur : ".  $pseudo. "</p>";
				$_SESSION['btnDeco']= '<a href="deco.php"title="contact"><button class="btn btn-outline-warning my-2 my-sm-0 ml-4 border-dark" type="submit">Deconnexion</button></a>';
	 	 		header('Location: pgDoom.php');


    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
				$_SESSION['erreur2']= "<p style='color:red;'> Mauvais identifiant ou mot de passe !</p>";
				header('Location: pgDoom.php');
    }
}
