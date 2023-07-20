<?php
session_start();
include("const.inc.php");


// verification de jetons de CSRF à envoyer
$pseudo = isset($_POST['pseudo']) ? $_POST['pseudo'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';


// initialisation du tableau d'erreur
$erreurs = [];

// Perform validation on user inputs
// validation du Pseudo
if (preg_match("/^[A-Za-z0-9À-ú]{5,20}/", $pseudo) === 0) {
    $erreurs["pseudo"] = "Le pseudo n'est pas valide";
}

// verification d'Email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erreurs["email"] = "L'email n'est pas valide";
}

//valider $Mot_de_passe
if (preg_match("/^[A-Za-z0-9_$]{8,}/", $pass) === 0) {
    $erreurs["pass"] = "Le mot de passe n'est pas valide";
}

// mettre en place une protection xss
$pseudo = htmlspecialchars($pseudo);
$email = htmlspecialchars($email);
$pass = htmlspecialchars($pass);


// si validation rediriger vers la page de formulaire
if (count($erreurs) > 0) {
    $_SESSION["compte-donnees"]["pseudo"] = $pseudo;
    $_SESSION["compte-donnees"]["email"] = $email;
    $_SESSION["compte-donnees"]["pass"] = $pass;
    $_SESSION["compte-erreurs"] = $erreurs;
    echo '<div class="">' . '<h2>Erreur:</h2>';
    echo '<p class="b">'. implode('</p><p class="">' ,$erreurs) . '</p>';
    echo '<a href="forminscription.php">Retour</a>' .'</div>';
    exit;
}

// Hash the password
$hashedPassword = password_hash($pass, PASSWORD_DEFAULT);


// connexion avec la base de données
try {
    $sql = 'SELECT COUNT(*) AS nb FROM users WHERE email = ?';
    $qry = $pdo->prepare($sql);
    $qry->execute([$email]);
    $row = $qry->fetch();

    if ($row['nb'] > 0) {
        echo 'This email is already registered. Please sign in.';
        exit;
    }

    $sql = 'INSERT INTO users(pseudo, email, pass) VALUES(?, ?, ?)';
    $qry = $pdo->prepare($sql);
    $qry->execute([$pseudo, $email, $hashedPassword]);

    $_SESSION['signed_up'] = true; // Set the flag to indicate successful sign-up

    unset($pdo); // Close the database connection

    header("location: formconnexion.php"); // Redirect to the login page
    exit;
} catch (PDOException $err) {
    echo $err->getMessage();
    $_SESSION["compte-erreur-sql"] = $err->getMessage();
    $_SESSION["compte-donnees"]["pseudo"] = $pseudo;
    $_SESSION["compte-donnees"]["email"] = $email;
    $_SESSION["compte-donnees"]["pass"] = $pass;
    // header("location: home.php");
    exit;
}
?>
