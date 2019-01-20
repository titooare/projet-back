
<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style type="text/css">

body{
  background-image: linear-gradient(0deg,#15526c 0,#54abbe 28%,#f99d2e 72%,#d95937 100%);
}


  </style>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
            <a href="index.php" > <img src="img/logo.png"></a>
		  <h1>bienvenue cher vendeur G2A</h1>
		  <div class="alert " role="alert">
                     <h4 class="alert-heading">entrer un jeux sur la platforme G2A</h4>
                        <form action="testUser.php" method="post">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Nom du jeux</label>
                            <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez le nom du jeux">
                        </div>
                       <div class="form-group">
                           <label for="exampleInputPassword1">console</label>
                        <input type="text" name="console" class="form-control" id="exampleInputPassword1" placeholder="Entrez la console du jeux">
                      </div>
                       <div class="form-group">
                           <label for="exampleInputPassword1">prix</label>
                        <input type="number" name="prix" class="form-control" id="exampleInputPassword1" placeholder="entrez le prix du jeux">
                      

                         <small id="emailHelp" class="form-text text-muted">Veuillez entrer un chiffre ou un nombre.</small>
                      </div>
                       <div class="form-group">
                           <label for="exampleInputPassword1"> nombre de joueurs max</label>
                        <input type="number" name="nbre_joueurs_max" class="form-control" id="exampleInputPassword1" placeholder="Entrer le nombre de joueurs maximum">
                      </div>

                      <div class="form-group">
                           <label for="exampleInputPassword1">commentaires</label>
                        <input type="text" name="commentaires" class="form-control" id="exampleInputPassword1" placeholder="Entrez un commentaire modéré">
                      </div>
                        <div class="form-group">
                           <label for="exampleInputPassword1">adresse jacket</label>
                        <input type="text" name="jacket" class="form-control" id="exampleInputPassword1" placeholder="Entrer l'adresse de l'image de la jacket">
                      </div>

                        <br><br>
                       <center><button type="submit" value="Envoyer"class="btn btn-info pl-5 pr-5"><h4>ENVOYER</h4></button></center>
                      </div>
              </form>
         </div>
            </div>

    </div>





 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
