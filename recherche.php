<?php

    //Si le formulaire est envoyé donc si on a appuyé sur le bouton qui a comme name : form
    if(isset($_POST['form'])){
        //Connexion a la base de donnée

        try
        {
        	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root3', '914=GE-FèR/poolm');
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }

        //On récupère ce qu'a rentrer l'utilisateur dans le champ texte et on utilise la fonction htmlentities pour se protéger d'une faille web
        $motEntree = htmlentities($_POST['motEntree']);

        //On fait notre requete on va chercher toutes les entrées de "matable" ou les motclés correspondent a ce que vient de rentrer l'utilisateur

        $req = $bdd->prepare('SELECT * FROM jeux_video WHERE nom = "'.$motEntree.'"');;
        $req->execute();

        //On fait une boucle et on affiche tous les sujets par exemple ou motclés = motEntree
        while($donnees = $req->fetch(PDO::FETCH_OBJ)) {
            echo $donnees->ID;
            header("Location:pgDoom.php?id=$donnees->ID");
        }
    }
?>
