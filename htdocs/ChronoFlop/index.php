<?php 
session_start();
if(isset($_SESSION['email'])){
echo 'Bienvenue, '.$_SESSION['email']; 
}
?>

<!DOCTYPE html>     
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>ChronoFlop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i></small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>contact.pro@Chronoflop.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
             <a href="index.php" class="navbar-brand ml-lg-3">
                <h1 class="m-0 display-5 text-uppercase text-primary"><i class="fa fa-truck mr-2"></i>ChronoFlop</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Accueil</a>
                    <a href="about.php" class="nav-item nav-link">A propos</a>
                    <a href="price.php" class="nav-item nav-link">Nos tarifs</a>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Colis</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">Envoyer un colis</a>
                            <a href="single.php" class="dropdown-item">Suivre un colis</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <a href="client.php" class="nav-item nav-link">Espace client</a>
                <a href="deconnexion.php" class="nav-item nav-link active">Deconnexion</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-primary mb-4">Rapide & Éfficace</h1>
            <h1 class="text-white display-3 mb-5">Service de livraison</h1>
            <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="N° de colis">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-3">Suivre son colis</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="img/about.jpg" alt="">
                    <div class="bg-primary text-dark text-center p-4">
                        <h3 class="m-0">+25 ans d'experiences</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">à propos de nous</h6>
                    <h1 class="mb-4">Une entreprise de livraison de confiance et fiable</h1>
                    <p class="mb-4">ChronoFlop met tous les moyens possible en leurs disposition pour produire un service de qualité execptionnel avec un prix agressif.</p>
                    <div class="d-flex align-items-center pt-2">
                        <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/dQw4w9WgXcQ" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-bold m-0 ml-4">Regarder la vidéo de présentation</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!--  Quote Request Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 py-5 py-lg-0">
                    <h6 class="text-primary text-uppercase font-weight-bold">Nous contacter</h6>
                    <h1 class="mb-4">Vous voulez discuter avec nous ?</h1>
                    <p class="mb-4">Nos experts prendrons un plaisir de vous conctactez dans les plus bref délais apres avoir fournis votre mail</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">+300</h1>
                            <h6 class="font-weight-bold mb-4">Livreur en france</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">+1000</h1>
                            <h6 class="font-weight-bold mb-4">Client satisfais</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-primary mb-2" data-toggle="counter-up">+2500</h1>
                            <h6 class="font-weight-bold mb-4">Colis livré/mois</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5">
                        <form class="py-5">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Votre nom" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4" placeholder="Votre Email" required="required" />
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;">
                                    <option selected>Pourquoi vous voulez discuter avec nous ?</option>
                                    <option value="1">Une question ?</option>
                                    <option value="2">Un probleme ?</option>
                                    <option value="3">De l'aide ?</option>
                                    <option value="4">Autre</option>
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote Request Start -->


    <!-- Services Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Nos Services</h6>
                <h1 class="mb-4">Les meilleurs service que l'on peut vous proposé sur le marcher</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-plane text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Transport aériens</h6>
                    </div>
                    <p>Parfais pour envoyer votre colis dans les 4 coins du monde et qu'il puisse être expédier le plus rapidement.</p>
                    <a class="border-bottom text-decoration-none" href="">Bientôt disponible</a>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-ship text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Transport maritime</h6>
                    </div>
                    <p>Plus économique que l'avion ce choix est parfait pour les colis lourd.</p>
                    <a class="border-bottom text-decoration-none" href="">Bientôt disponible</a>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-truck text-dark pr-3"></i>
                        <h6 class="text-white font-weight-medium m-0">Transport terrestre</h6>
                    </div>
                    <p>Méthode de livraison par défaut ce choix est parfait pour la livraison dans un même pays.</p>
                    <a class="border-bottom text-decoration-none" href="price.html">Voir les prix !</a>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary mb-4 p-4">
                        <i class="fa fa-2x fa-store text-dark pr-3"></i>
                    </div>
                    <h6 class="text-white font-weight-medium m-0">Transport Cargo</h6>
                    <p>Pour les fournisseur, pour envoyer de grande quantité d'un pays à un autre.</p>
                    <a class="border-bottom text-decoration-none" href="">Bientôt disponible</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Features Start -->
    <div class="container-fluid bg-secondary my-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid w-100" src="img/feature.jpg" alt="">
                </div>
                <div class="col-lg-7 py-5 py-lg-0">
                    <h6 class="text-primary text-uppercase font-weight-bold">Pourquoi nous choisir ?</h6>
                    <h1 class="mb-4">Rapide, sécurisé un service de confiance.</h1>
                    <p class="mb-4">Certe nous sommes une entreprise récente mais nous pouvons déjà nous hissé parmis les plus haut.</p>
                    <ul class="list-inline">
                        <li><h6><i class="far fa-dot-circle text-primary mr-3"></i>Un service client disponible 24h/24 et 7j/7</h6></li>
                    </ul>
                    <a href="about.html" class="btn btn-primary mt-3 py-2 px-4">En savoir plus.</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Pricing Plan Start -->
            <!-- Particulier -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h5 class="text-primary text-uppercase font-weight-bold">Grille tarifaire</h5>
                <h6 class="mb-4">Prix défiant toute concurrence !</h6>
                <h1 class="text-primary text-uppercase font-weight-bold">Pour les particuliers</h1>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">€</small>4,99<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Colis</small>
                            </h1>
                        </div>
                        <div class="bg-primary text-center p-4">
                            <h3 class="m-0">Livraison Normal</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Temps de livraison de 5 à 10 jours*</p>
                            <p>Aucun suivis</p>
                            <p>Non prioritaire**</p>
                            <a href="" class="btn btn-primary py-2 px-4 my-2">Commander maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">€</small>8,99<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Colis</small>
                            </h1>
                        </div>
                        <div class="bg-primary text-center p-4">
                            <h3 class="m-0">Livraison Rapide</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Temps de livraison de 2 à 5 jours*</p>
                            <p>Suivis de colis</p>
                            <p>Non prioritaire**</p>
                            <a href="" class="btn btn-primary py-2 px-4 my-2">Commander maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">€</small>14,99<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Colis</small>
                            </h1>
                        </div>
                        <div class="bg-primary text-center p-4">
                            <h3 class="m-0">Livraison express</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Temps de livraison moins de 24h*</p>
                            <p>Suivis de colis</p>
                            <p>Prioritaire**</p>
                            <a href="" class="btn btn-primary py-2 px-4 my-2">Commander maintenant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Entreprise -->
        
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h1 class="text-primary text-uppercase font-weight-bold">Pour les entreprises</h1>
                <h6 class="mb-4">Prix variable suivant l'abonnement choisi.</h6>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;"></small>Gratuit<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Colis</small>
                            </h1>
                        </div>
                        <div class="bg-primary text-center p-4">
                            <h3 class="m-0">Livraison Normal</h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Temps de livraison de 5 à 10 jours*</p>
                            <p>Aucun suivis</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">€</small>3,99<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Colis</small>
                            </h1>
                        </div>
                        <div class="bg-primary text-center p-4">
                            <h3 class="m-0">Livraison Rapide</h3>
                            <h6 class="m-0">Gratuit si abonnement premuim</h6>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Temps de livraison de 2 à 5 jours*</p>
                            <p>Suivis de colis</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="bg-secondary">
                        <div class="text-center p-4">
                            <h1 class="display-4 mb-0">
                                <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">€</small>4,99<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Colis</small>
                            </h1>
                        </div>
                        <div class="bg-primary text-center p-4">
                            <h3 class="m-0">Livraison express</h3>
                            <h6 class="m-0">Uniquement abonnement premuim</h6>
                        </div>
                        <div class="d-flex flex-column align-items-center py-4">
                            <p>Temps de livraison moins de 24h*</p>
                            <p>Suivis de colis</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Abonnement -->

            <div class="container-fluid pt-5">
                <div class="container">
                    <div class="text-center pb-2">
                        <h1 class="text-primary text-uppercase font-weight-bold">Abonnement pour les entreprise</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-4 offset-md-2 mb-5">
                            <div class="bg-secondary">
                                <div class="text-center p-4">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">€HT</small>290<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Ans</small>
                                    </h1>
                                </div>
                                <div class="bg-primary text-center p-4">
                                    <h4 class="m-0">Abonnement normal</h4>
                                </div>
                                <div class="d-flex flex-column align-items-center py-4">
                                    <p>Limité a 250 colis/mois</p>
                                    <p>Récuperation des colis tout les 2 jours</p>
                                    <p>Livraison express non disponible</p>
                                    <a href="" class="btn btn-primary py-2 px-4 my-2">Commander maintenant</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <div class="bg-secondary">
                                <div class="text-center p-4">
                                    <h1 class="display-4 mb-0">
                                        <small class="align-top text-muted font-weight-medium" style="font-size: 22px; line-height: 45px;">HT€</small>490<small class="align-bottom text-muted font-weight-medium" style="font-size: 16px; line-height: 40px;">/Ans</small>
                                    </h1>
                                </div>
                                <div class="bg-primary text-center p-4">
                                    <h4 class="m-0">Abonnement premium</h4>
                                </div>
                                <div class="d-flex flex-column align-items-center py-4">
                                    <p>Aucune limite de colis</p>
                                    <p>Récuperation des colis tout les jours</p>
                                    <p>Livraison rapide gratuit</p>
                                    <p>Livraison express disponible</p>
                                    <a href="" class="btn btn-primary py-2 px-4 my-2">Commander maintenant</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <!-- Pricing Plan End -->
    <!-- Pricing Plan End -->


    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text-primary text-uppercase font-weight-bold">Chef d'entrepot</h6>
                <h1 class="mb-4">Rencontrez nos chefs d'entrepot.</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="img/team-1.jpg" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Maximus</h5>
                                <span>Entrepot de Mérignac</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="img/team-2.jpg" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Thomas Pasquier</h5>
                                <span>Entrepot de Pierrelaye</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="img/team-3.jpg" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Christina Racli</h5>
                                <span>Entrepot de Arras</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="img/team-4.jpg" alt="">
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">Killian Mbaclé</h5>
                                <span>Entrepot de Rosny-Sous-Bois</span>
                            </div>
                            <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-dark btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-dark btn-social" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-6">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Contact</h3>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>1 Rue de la Livraison, Paris 75099</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+33 1 12 34 56 78</p>
                        <p><i class="fa fa-envelope mr-2"></i>contact.pro@chronoflop.fr</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Liens rapides</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Accueil</a>
                            <a class="text-white mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>À propos</a>
                            <a class="text-white mb-2" href="service.html"><i class="fa fa-angle-right mr-2"></i>FAQ</a>
                            <a class="text-white mb-2" href="price.html"><i class="fa fa-angle-right mr-2"></i>Nos tarifs</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Newsletter</h3>
                <p>Si vous voulez vous tenir au courant des dernieres nouveauté de ChronoFlop vous pouvez vous inscrire a la Newsletter</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Votre adresse mail">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">S'inscrire</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">ChronoFlop</a>. All Rights Reserved. 
				
				<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
				Designed by <a href="https://htmlcodex.com">HTML Codex</a>
                <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="cgu.html">CGU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="cgv.html">CGV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="service.html">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>