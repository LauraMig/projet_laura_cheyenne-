<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Récupération des valeurs du formulaire
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $pass = isset($_POST['pass']) ? htmlspecialchars($_POST['pass']) : '';

    // Hachage des identifiants pour les comparer avec ceux stockés dans la base de données
    // $hashedEmail = md5(md5($email) . strlen($email));
    // $hashedPass = sha1(md5($pass) . md5($pass));

    // Vérification des identifiants dans la base de données
    include("const.inc.php");

    try {

        // Requête pour récupérer l'utilisateur correspondant aux identifiants fournis
        $sql = 'SELECT * FROM users WHERE email = :email';
        $qry = $pdo->prepare($sql);
        $qry->bindParam(":email", $email, PDO::PARAM_STR);
        $qry->execute();

        // Identifiants invalides, affichage d'un message d'erreur
        if($qry->rowCount() == 0){
            header('Location: formconnexion.php?error=1'); // Redirection vers la page login avec erreur
            exit;
            // echo '<div class="big-message box-light center-all">' . '<h2>Erreur</h2>' . '<p class="bold">Mot de passe ou email invalide. Veuillez réessayer.</p>' . '</div>';
            // echo '<br/>No email match';
            // return;
        }

        $user = $qry->fetch();

        // Identifiants invalides, affichage d'un message d'erreur
        if(!password_verify($pass, $user['pass'])) {
            header('Location: formconnexion.php?error=1'); // Redirection vers la page login avec erreur
            exit;
            // echo '<div class="big-message box-light center-all">' . '<h2>Erreur</h2>' . '<p class="bold">Mot de passe ou email invalide. Veuillez réessayer.</p>' . '</div>';
            // echo '<br/>Wrong password';
            // return;
        }

        // Connexion réussie, enregistrement de l'utilisateur dans la session
        $_SESSION['user'] = $user;
        $_SESSION['email'] = $user["email"];
        $_SESSION['connected'] = true;

        header('Location: home.php'); // Redirection vers la page de tableau de bord après connexion
        exit();

    } catch (PDOException $err) {
        // Gestion des erreurs de base de données
        header('Location: formconnexion.php?error=1'); // Redirection vers la page login avec erreur
        exit;
        // echo '<div class="big-message box-light center-all">' . 'Erreur de connexion à la base de données : ' . $err->getMessage() . '</div>';
    }
}
?>