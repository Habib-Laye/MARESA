
<?php

    require_once'db.php';
    //instance de la base de données
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=maresa_bdd', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Récupérer l'email rempli par l'utilisateur

    $email = $_POST["email"];
    //  Récupération de l'utilisateur et de son mot de passe hashé

    $req = $bdd->prepare('SELECT id_compte, motdepasse FROM compte WHERE email = :email');
    $req->execute(array(
        'email' => $email));
    $resultat = $req->fetch();
    //le var_dump ci_dessous permet d'afficher toutes les infos sur la variable $resultat
    //var_dump($resultat);
    // Comparaison du mot de passe envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($_POST['motdepasse'], $resultat['motdepasse']);

    if (!$resultat)
    {
         echo 'Mauvais identifiant !';
    } else {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['id'] = $resultat['id_compte'];
                
            header('Location: connexion.html');
            //echo 'Vous êtes connecté ! ' . $_SESSION['nom'];
            }
            else {
                echo 'Mauvais mot de passe !';
            }
        }






?>