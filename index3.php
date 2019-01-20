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
$reponse = $bdd->query('SELECT * FROM jeux_video_occasion ORDER BY ID DESC LIMIT 0, 19');

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles.css">

</head>
    <body class="fdEcran">
<header>
            <div class="row">
                <div class="logo col-7 ">
                    <a href="index.php"><img src="img/g2a-logo-ad-4.png"></a>
                </div>
                <div class="barre-nav col-5 row  justify-content-end ">
                    <div class="mt-4 ">
											<?php

												if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
												{
    										echo $_SESSION['reussi'];
												echo $_SESSION['btnDeco'];
												echo $_SESSION['btnVendre'];
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
                      <a href="index.php"> <button class="btn btn-outline-warning my-2 my-sm-0 ml-1  " type="submit"><img class="utilisateur  " src="img/600px-Xbox_one_logo.svg.png"></button></a>
                          <a href="index2.php"> <button class="btn btn-outline-warning my-2 my-sm-0 ml-4 mr-5 " type="submit"><img class="utilisateur  " src="img/kisspng-playstation-4-playstation-3-5afd65389ec731.0511940015265559606504.png"></button></a>
													<a href="index3.php"> <button class="btn btn-outline-warning my-2 my-sm-0 ml-1  " type="submit"><img class="utilisateur  " src="img/occasion.png"></button></a>
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


            <div class="carousel">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                                 <img class="d-block w-100" src="img/2644.jpg" alt="First slide">

                              <h3><a href="#" class="badge badge-warning btnCarousel">acheter</a></h3>
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="img/rdr2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="img/fondEcran2.jpg" alt="Third slide">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>

            </div>



								<div class="container">
									<div class="row col-12">


								<?php while ($donnees = $reponse->fetch())
								{
									?>

                  <div class="card col-4 p-4 mb-4 ">

                    <img class="card-img-top" src="<?php echo $donnees['jacket']; ?>" alt="Card image cap">

                    <div class="card-body">
                      <h5 class="card-title"><?php echo $donnees['nom']; ?><br /></h5>
                      <p class="card-text"><?php echo $donnees['commentaires']; ?></p>
                      </div>



                        <button type="button" class="btn btn-danger "><a title="Titre du lien" href="pgDoom.php">acheter</a></button>



                    <div class="card-footer">
                       <h3 class=" prix"><b><?php echo $donnees['prix']; ?>€</b></h3>
                    </div>
                  </div>
									<?php
										}

										$reponse->closeCursor(); // Termine le traitement de la requête

										?>

									</div>
									</div>



  </div>
</div>
</div>
<br>
<nav aria-label="... p-3">
  <ul class="pagination">
    <li class="page-item ">
      <a class="page-link" href="index.php" tabindex="-1">Retour</a>
    </li>
    <li class="page-item "><a class="page-link" href="index.php">1</a></li>
    <li class="page-item disabled">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>




<footer>
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

</footer>





















 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
