<?php
session_start();
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root3', '914=GE-FèR/poolm');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}


$id = $_GET['id'];

$reponse = $bdd->prepare('SELECT * FROM jeux_video where ID = :ID ');

$reponse->execute(array(':ID' => $id));

$donnees = $reponse->fetch();

?>

<!DOCTYPE html>
<html >
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles.css">

</head>

<body >

     <div id="conteneur">
        <div class="video">
            <button class="btn btn-outline-warning bouton-video" type="submit">X</button>
            <iframe width="560" height="315" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

    </div>
  <div class="pgCenter">
        <header>

					<div class="row">
							<div class="logo col-7 ">
									<a href="../index.html"><img src="img/g2a-logo-ad-4.png"></a>
							</div>
							<div class="barre-nav col-5 row  justify-content-end ">
									<div class="mt-4 ">
										<?php

											if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
											{
											echo $_SESSION['reussi'];
											echo $_SESSION['btnDeco'];
											}

										?>

									<!--	<a href="deco.php"title="contact">
										<button class="btn btn-outline-warning my-2 my-sm-0 ml-4 border-dark" type="submit">Deconnexion</button></a>-->


								 <a href="pgIdentifiant.php" title="s'identifier"> <button class="btn btn-outline-warning my-2 my-sm ml-4 border-dark" type="submit"><img class="utilisateur " src="img/Utilisateur.png">
										 </button></a>
											<a href="../index%20_panier.html" title="panier"> <button class="btn btn-outline-warning my-2 my-sm-0 ml-4 border-dark " type="submit"><img class="utilisateur  " src="img/panier.png"></button></a>
											<a href="../formulaireHTML/index.html"title="contact"> <button class="btn btn-outline-warning my-2 my-sm-0 ml-4 border-dark" type="submit"><img class="utilisateur  " src="img/mail.png"></button></a>

									</div>
							</div>
					</div>
            <div class="row">
                <div class="barre col-12">


                    <nav class="navbar navbar-light ">
                        <div>
                      <a href="../index.html"> <button class="btn btn-outline-warning my-2 my-sm-0 ml-1  " type="submit"><img class="utilisateur  " src="img/600px-Xbox_one_logo.svg.png"></button></a>
                          <a href="index.html"> <button class="btn btn-outline-warning my-2 my-sm-0 ml-4 mr-5 " type="submit"><img class="utilisateur  " src="img/kisspng-playstation-4-playstation-3-5afd65389ec731.0511940015265559606504.png"></button></a>
                        </div>
                        <div>
													<form class="form-inline" method="post" action="recherche.php" >

														<input class="form-control mr-sm-2" name="motEntree" type="text" placeholder="Search" aria-label="Search">
														<button class="btn btn-outline-warning my-2 my-sm-0" type="submit" name="form"> Recherche</button>

													</form>
                        </div>
                    </nav>
                </div>
            </div>


    </header>
          <div class= "container">
           <div class="row">
                <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#"><a title="Titre du lien" href="index.html">accueil</a></a></li>
                          <li class="breadcrumb-item"><a href="#">librairie</a></li>
                           <li class="breadcrumb-item active" aria-current="page">acheter</li>
                     </ol>
                </nav>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/rdr2.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                                 <img class="d-block w-100" src="img/wolfenstein_07fae35db1ab4cf6d4616830fcf6410890e892bc.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                              <img class="d-block w-100" src="img/123.jpg" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
          </div>

<br><br>

<main>
          <div class="container col-12 jacketDoom">
              <div class="row ">
                <div class="card" style="width: 18rem;">
									<p><?php echo $donnees['nom']; ?></p>
                   <img class="card-img-top" src="<?php echo $donnees['jacket']; ?>" alt="Card image cap">
                     <div class="card-body">
                        <div class="container">
                          <div class="row">
                            <div class="col-6">
                               <p class="card-text"> <a href="../index%20_panier_doom.html" class="btn btn-danger">acheter</a></p>

                            </div>
                             <div class="col-3">
                                <h3><span class="badge badge-warning"><?php echo $donnees['prix']; ?>€</span></h3>
                              </div>
                           </div>
                         </div>
                     </div>
                </div>
                <div class="container col-3 votes">
                   <big>satisfait</big>
                      <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                     </div>
                     <big>recomandé</big>
                      <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 70%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">70%</div>
                     </div>
                      <big>mauvais</big>
                      <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 15%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">15%</div>
                     </div>

                          <p><?php echo $donnees['commentaires']; ?></p>

                            <h3><a href="#" class="badge badge-info modalVideo ">demo</a></h3>

              </div>

               <div class=" container col-2 col-3 conect">
                <div class="row">
                   <div class="alert alert-success" role="alert">
                     <h4 class="alert-heading">se connecter</h4>
                        <form method="post" action="connextion2.php">
                        <div class="form-group"
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
                      <form class="form-group form-check">
                           <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        <br>
		                      <a title="Titre du lien" href="index.php">   <button  type="submit" class="btn btn-success">Connection</button></a>
													<button type="button" class="btn btn-success "><a title="Titre du lien" href="pgDoom.php?id=<?php echo $donnees['ID'] ?>">Connection</a></button>
                       </form>
											 </div>
                  </div>
                <a href="pgIdentifiant2.html"><button type="button" class="btn btn-info">INSCRIPTION</button></a>
               </div>

                   </div>
        </div>
    </div>

</main>










<br><br><br>



    <footer>
        <div class="container ">
            <div class="row">
                    <div class=" copy col-12 p-4">Copyright © 2005 - 2018 Instant Gaming - Instant Gaming Ltd - Hong Kong</div>

                    <div class="col-3"> Install the G2A app
                        Get G2A hot deals wherever you go!
                    </div>
                    <div class="col-6 ">
                    <img src="img/badge-app-store-b967b583fc.png">
                    <img src="img/badge-google-play-ea809ca892.png">
                    <img src="img/badge-microsoft-8ed605b6dc.png">

                    </div>
                    <div class="col-3">
                        <p>Get 3% Cashback!</p>
                    </div>
                </div>
            </div>


    </footer>

    </div>





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="script.js" type="text/javascript"></script>

</body>
</html>
