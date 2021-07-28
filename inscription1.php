<?php

    require_once 'db.php';
   
    if(isset($_POST['valider'])) {
       
        /* Je récupère ce qui a été écrit par l'utilisateur 
        dans le champ nom et je le stock dans ma variable $nom. htmlspecialchars permet de ne pas
        accepter du code html dans le champ à remplir pour empêcher des utilisateurs de détruire
        notre base de donnée */

         $nom = htmlspecialchars($_POST['nom']); 
         $prenom = htmlspecialchars($_POST['prenom']); 
         $Type_etablissement = htmlspecialchars($_POST['type_etablissement']); 
         $num_siret = htmlspecialchars($_POST['num_siret']); 
         $mail = htmlspecialchars($_POST['email']);
         $ville = htmlspecialchars($_POST['ville']); 
         $code_postal = htmlspecialchars($_POST['code_postal']); 
         $adresse = htmlspecialchars($_POST['adresse']);
            // La fonction hash permet de traiter le mot de passe
         $motdepasse = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);
         $motdepasse2 = password_hash($_POST['motdepasse2'], PASSWORD_DEFAULT);


        // Vérification des champs ( Si aucun champs n'est vide, on fait le traitement) 

        if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['type_etablissement']) AND
        !empty($_POST['num_siret']) AND !empty($_POST['email']) AND !empty($_POST['ville']) AND
        !empty($_POST['code_postal']) AND !empty($_POST['adresse']) AND $_POST['motdepasse'] == 
        $_POST['motdepasse2'])
        {
        
        //vérification que le mail existe avant insertion dans la base de donnée 
          
        $req = $bdd->prepare("SELECT * FROM compte WHERE email=?");
        $req->execute(Array($mail)); 
        $user = $req->fetch();
            if ($user) {
            // email existe
            echo " L'email ou le mot de passe existe déjà . ";
            } else {
                header('Location: espace.php');
            }
        }    
    }


?>

