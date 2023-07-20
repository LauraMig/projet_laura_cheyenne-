<?php
session_start();
include("const.inc.php");


// verification de jetons de CSRF à envoyer
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';


// initialisation du tableau d'erreur
$erreurs = [];

// Perform validation on user inputs
// validation du nom
if (preg_match("/^[A-Za-z0-9À-ú]{5,20}/", $nom) === 0) {
    $erreurs["nom"] = "Le nom n'est pas valide";
}

// verification d'Email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erreurs["email"] = "L'email n'est pas valide";
}

//valider $telephone
if (preg_match("/^(?:(?:\+|00)33|0)[1-9][0-9]{8}$/", $telephone) === 0) {
    $erreurs["telephone"] = "Le telephone n'est pas valide";
}

// if (preg_match("/^[A-Za-z0-9À-ú]{5,20}/", $message) === 0) {
//     $erreurs["message"] = "Le message n'est pas valide";
// }

// mettre en place une protection xss
$nom = htmlspecialchars($nom);
$email = htmlspecialchars($email);
$telephone = htmlspecialchars($telephone);
$message = htmlspecialchars($message);


// si validation rediriger vers la page de formulaire
if (count($erreurs) > 0) {
    $_SESSION["compte-donnees"]["nom"] = $nom;
    $_SESSION["compte-donnees"]["email"] = $email;
    $_SESSION["compte-donnees"]["telephone"] = $telephone;
    $_SESSION["compte-donnees"]["message"] = $message;
    $_SESSION["compte-erreurs"] = $erreurs;
    echo '<div class="">' . '<h2>Erreur:</h2>';
    echo '<p class="b">'. implode('</p><p class="">' ,$erreurs) . '</p>';
    echo '<a href="forminscription.php">Retour</a>' .'</div>';
    exit;
}

// Hash the password
// $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);


// connexion avec la base de données
try {
    $sql = 'SELECT COUNT(*) AS nb FROM communication WHERE email = ?';
    $qry = $pdo->prepare($sql);
    $qry->execute([$email]);
    $row = $qry->fetch();

    if ($row['nb'] > 0) {
        echo 'This email is already registered. Please sign in.';
        exit;
    }

    $sql = 'INSERT INTO communication (nom, email, telephone, message) VALUES(?, ?, ?,?)';
    $qry = $pdo->prepare($sql);
    $qry->execute([$nom, $email, $telephone, $message]);

    $_SESSION['signed_up'] = true; // Set the flag to indicate successful sign-up

    unset($pdo); // Close the database connection

    header("location: formconnexion.php"); // Redirect to the login page
    exit;
} catch (PDOException $err) {
    echo $err->getMessage();
    $_SESSION["compte-erreur-sql"] = $err->getMessage();
    $_SESSION["compte-donnees"]["nom"] = $nom;
    $_SESSION["compte-donnees"]["email"] = $email;
    $_SESSION["compte-donnees"]["telephone"] = $telephone;
    $_SESSION["compte-donnees"]["message"] = $message;
    // header("location: home.php");
    exit;
}
?>
