<?php
session_start();

$nom = $_POST['nom'];
$console = $_POST['console'];
$prix = $_POST['prix'];
$nbre_joueurs_max = $_POST['nbre_joueurs_max'];
$commentaires = $_POST['commentaires'];
$jacket = $_POST['jacket'];


try

{

    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root3', '914=GE-FèR/poolm');

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}
if (gettype($prix) != 'string' || gettype($nbre_joueurs_max)  != 'string')
{

    echo 'Mauvaise entrer, inscrire uniquement chiffres ou nombres  !';

         }


else{
$req = $bdd->prepare('INSERT INTO jeux_video_occasion(nom, console, prix, nbre_joueurs_max, commentaires, jacket) VALUES(:nom, :console, :prix, :nbre_joueurs_max, :commentaires, :jacket)');

$req->execute(array(

    'nom' => $nom,

    'console' => $console,

    'prix' => $prix,

    'nbre_joueurs_max' => $nbre_joueurs_max,

    'commentaires' => $commentaires,

    'jacket' => $jacket

    ));

	header('Location: index3.php');
}

   /* if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['adresse_mail'] = $email;
            $_SESSION['reussi']= "<p style='color:white;'> Utilisateur : ".  $email. "</p>";
            $_SESSION['btnDeco']= '<a href="deconnect.php"><button class="btn btn-outline-warning my-2 my-sm-0" type="submit">deconnection</button></a>';
              header('Location: index.php');


}
else {
    echo 'Mauvais identifiant ou mot de passe !';
            $_SESSION['erreur2']= "<p style='color:red;'> Mauvais identifiant ou mot de passe !</p>";
            header('Location: pgIdentifiant.php');
*/





?>
