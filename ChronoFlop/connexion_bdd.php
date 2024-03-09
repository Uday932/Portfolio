<?php 
session_start();
if(isset($_SESSION["email"])){
    header("Location: index.php");
}

if(isset($_POST["email"]) && isset($_POST["mdp"])){
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];

    $connexion = mysqli_connect("localhost", "root", "", "chronoflop");
    if(mysqli_connect_errno()){
        echo "Erreur de connexion à la base de données : " . mysqli_connect_error();
    }

    $req = "SELECT email, mdp FROM inscription WHERE email = ? AND mdp = ?";
    $statement = mysqli_prepare($connexion, $req);
    mysqli_stmt_bind_param($statement, "ss", $email, $mdp);
    mysqli_stmt_execute($statement);
    mysqli_stmt_store_result($statement);

    if(mysqli_stmt_num_rows($statement) == 1){
        mysqli_stmt_bind_result($statement, $email, $mdp);
        mysqli_stmt_fetch($statement);

        $_SESSION["email"] = $email;

        header("Location: index.php");
        
    } else {
        $erreur="Login ou mot de passe incorrect. Veuillez réessayez.";
        echo "$erreur";
        header('refresh:3;url=login.html');
        
    
    }

    mysqli_stmt_close($statement);
    mysqli_close($connexion);
}
?>
