<?php
session_start();

$pseudo = $_POST['pseudo'];

$email = $_POST['email'];

$pass_hache = $_POST['password'];

$pass2 = $_POST['password2'];



try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root3', '914=GE-FèR/poolm');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}




/*$reponse1 = $bdd->query('SELECT pseudo FROM membres WHERE pseudo = "' . $_POST['pseudo'] . '" ');
	$reponse1->execute(array(
    'pseudo' => $pseudo));

						$resultat2 = $reponse1->fetch();

            $reponse2 = $bdd->query('SELECT email FROM membres WHERE email = "' . $_POST['email'] . '" ');

						$resultat3 = $reponse2->fetch();

						if($pseudo == $resultat2)
            {
                echo  "Ce nom d'utilisateur est déjà utilisé.";
            }
            elseif($email == $resultat3)
            {
                echo  "Cette adresse de mail est déjà utilisée.";
            }*/




// Vérification de la validité des informations
if($pass2 !== $pass_hache ){
	echo "les mots de passes sont differant";
     $_SESSION['erreur']= "<p style='color:red;'>les mots de passe ne sont pas identiques</p>";
	 		header('Location: pgIdentifiant2.php');


}


// Hachage du mot de passe

else {

$pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);
// Insertion
$req = $bdd->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription) VALUES(:pseudo, :pass, :email, CURDATE())');
$req->execute(array(
    'pseudo' => $pseudo,
    'pass' => $pass_hache,
    'email' => $email));
    sleep(4);

    header('Location: pgIdentifiant.php');
    exit();

	}


?>
