<?php /*
session_start();
// Vérifier si le formulaire a été soumis
if (isset($_SESSION['login.php'])) {
  // Récupérer les données du formulaire
  $email = $_SESSION['email'];
  $mdp = $_SESSION['password'];

  // Vérifier si les champs sont vides
  if (empty($email) || empty($mdp)) {
    echo "Veuillez remplir tous les champs.";
  } else {
    // Vérifier l'authentification de l'utilisateur
    if ($email == "votre@email.com" && $mdp == "votremotdepasse") {
      // Authentification réussie, rediriger vers la page d'accueil ou autre page protégée
      header("Location: index.php");
      exit();
    } else {
      // Authentification échouée, afficher un message d'erreur
      echo "Adresse e-mail ou mot de passe incorrect.";
    }
  }
}*/


session_start();
if(isset($_SESSION["email"])){
    header("Location: index.php");
}

$erreur = "";
if(isset($_POST["email"]) && isset($_POST["mdp"])){
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];

    $connexion = mysqli_connect("localhost", "email", "mdp", "chronoflop");
    if(mysqli_connect_errno()){
        echo "Erreur de connexion à la base de données : " . mysqli_connect_error();
    }

    $requete = "SELECT email, mdp FROM inscription WHERE email = ? AND mdp = ?";
    $statement = mysqli_prepare($connexion, $requete);
    mysqli_stmt_bind_param($statement, "ss", $email, $mdp);
    mysqli_stmt_execute($statement);
    mysqli_stmt_store_result($statement);

    if(mysqli_stmt_num_rows($statement) == 1){
        mysqli_stmt_bind_result($statement, $email, $mdp);
        mysqli_stmt_fetch($statement);
        $_SESSION["email"] = $email;
        header("Location: index.php");
    } else {
        $erreur = "Email ou mot de passe incorrect.";
    }

    mysqli_stmt_close($statement);
    mysqli_close($connexion);
}
?>



<!DOCTYPE html>
<html lang="en">

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
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 display-5 text-uppercase text-primary"><i class="fa fa-truck mr-2"></i>ChronoFlop</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="index.html" class="nav-item nav-link">Accueil</a>
                    <a href="about.html" class="nav-item nav-link">À propos</a>
                    <a href="price.html" class="nav-item nav-link">Nos tarifs</a>
                    
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
            <h1 class="text-white display-3">Connexion</h1>
            <div class="d-inline-flex align-items-center text-white">
            </div>
        </div>
    </div>
    
    <div class="login" style="left: 10%;padding: 50px 0px 120px 50px;position:relative;display:inline-block;">
        <h2>Espace particulier</h2>
        <h4>Veuillez vous connecter</h4>
        <br><br>
        
        <form action="" method="POST" name="identification" style="padding-bottom: 20px;">
            <div style="width: 320px;line-height: 19px;">Identifiant<input type="text" required="required" value="" placeholder="Identifiant" name="user_username" style="float:right;"></div><br>
            <div style="width: 320px;line-height: 19px;">Mot de passe<input type="password" required="required" value="" placeholder="Mot de passe" name="user_passwd" style="float:right;"></div><br>
            <input type="HIDDEN" name="cmd" value="LOGIN"><input type="HIDDEN" name="sessid" value="qoxnkq45immy0m45z2h2vfrz">
            <button type="submit" name="submitEE" value="Valider" id="login_button" style="margin-left: 152px;">Se connecter</button>
        </form>
        <a href="client.html">Espace client</a>

        <div>
            <a href="">Mot de passe oublié ?</a> 
            
        </div>
    </div>

    <div class="login" style="left: 30%;padding: 50px 0px 120px 0px;position:relative;display:inline-block;">
        <h2>Espace professionnel</h2>
        <h4>Veuillez vous connecter</h4>
        <br><br>
        
        <form action="" method="POST" name="identification" style="margin-top: -40px;padding-bottom: 20px;">
            <div style="width: 320px;line-height: 19px;">ID entreprise<input type="text" required="required" value="" placeholder="ID entreprise" name="user_username" style="float:right;"></div><br>
            <div style="width: 320px;line-height: 19px;">Identifiant<input type="text" required="required" value="" placeholder="Identifiant" name="user_username" style="float:right;"></div><br>
            <div style="width: 320px;line-height: 19px;">Mot de passe<input type="password" required="required" value="" placeholder="Mot de passe" name="user_passwd" style="float:right;"></div><br>
            <input type="HIDDEN" name="cmd" value="LOGIN"><input type="HIDDEN" name="sessid" value="qoxnkq45immy0m45z2h2vfrz">
            <button type="submit" name="submitEE" value="Valider" id="login_button" style="margin-left: 152px;">Se connecter</button>
        </form>

        <div>
            <a href="">Mot de passe oublié ?</a> 
            
        </div>
    </div>
    <!-- Header End -->


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

<?php
$_SESSION['email'] = 'u_bhavsar@chronoflop.com';
$_SESSION['mdp']   = '90817344';