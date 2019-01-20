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
  background-image: linear-gradient(0deg,#15526c 0,#54abbe 28%,#f99d2e 72%,#d95937 90%,#15526c 100% );
}


  </style>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
            <a href="index.php" > <img src="img/logo.png"></a>
		  <h1>Un seul identifiant pour toutes vos plateformes G2A</h1>
		  <div class="alert " role="alert">
                     <h4 class="alert-heading">crée un identifiant G2A</h4>
                        <form method="post" action="test.php">
                        <div class="form-group">
                           <label for="exampleInputEmail1">addresse Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer email">
                           <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre email avec qui que ce soit.</small>
                        </div>
												<div class="form-group">
                           <label for="exampleInputEmail1">Pseudo</label>
                            <input type="text" name="pseudo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer Pseudo">

                        </div>

                       <div class="form-group">
                           <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="mot de passe">
                      </div>
											<?php
												if (isset ($_SESSION['erreur'])){
														echo $_SESSION['erreur'];


												}
												else{
													echo"";
												}
											?>
                       <div class="form-group">
                           <label for="exampleInputPassword1">Comfirmer mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password2" placeholder="Retaper votre mot de passe">
                      </div>
                      <div class="form-group form-check">
                           <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">j'accepte les termes & conditions</label>
                            <br>
                             <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">j'accepte de recevoir des emails &<br> communications par téléphone</label>
                        <br><br>

                       <center><button type="submit" class="btn btn-info pl-5 pr-5"><h4>s'inscrire</h4></button></center>
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
