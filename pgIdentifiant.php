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

  background: transparent linear-gradient(0deg,#15526c 0,#54abbe 28%,#f99d2e 72%,#d95937 90%,#15526c 100%);

}


  </style>
</head>

<body>
	<div class="container">
		<div class="row justify-content-center">
            <a href="index.php"><img class="mb-5" src="img/logo.png"></a>
		  <h1>Un seul identifiant pour toutes vos plateformes G2A</h1>
		  <div class="alert mb-5" role="alert">
                     <h4 class="alert-heading">se connecter</h4>

												<form method="post" action="connection.php">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Pseudo</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pseudo" placeholder="Entrer pseudo">

                        </div>
                       <div class="form-group">
                           <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"  name="password" placeholder="mot de passe">
                      </div>
											<?php
												if (isset ($_SESSION['erreur2'])){
														echo $_SESSION['erreur2'];


												}
												else{
													echo"";
												}
											?>
                      <div class="form-group form-check">
                           <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        <br>

                         <button  type="submit" class="btn btn-success">connection</button>
                      </div>
              </form>
         </div>

    </div>

              <center><a href="pgIdentifiant2.php"><button type="button" class="btn btn-info pl-5 pr-5 mb-5"><h3>crée un ID G2A</h3>
                     </button></a></center>

</div>



 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
