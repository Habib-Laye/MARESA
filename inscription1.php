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


        /* Vérification des champs ( Si aucun champs n'est vide, on fait le traitement) */

        if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['type_etablissement']) AND
        !empty($_POST['num_siret']) AND !empty($_POST['email']) AND !empty($_POST['ville']) AND
        !empty($_POST['code_postal']) AND !empty($_POST['adresse']) AND !empty($_POST['motdepasse']) AND 
        !empty($_POST['motdepasse2'])) {
        
            /*vérification que le mail existe avant insertion dans la base de donnée */
           
            $strenNom = strlen($nom);
            if ($strenNom <= 255) {
       
                //if ($mail === $mail2) {
       
                    $req = $bdd->prepare("SELECT * FROM compte WHERE email=?");
                   
                   //vérification de l'existance du mail dans la BDD
                   $req = $bdd->prepare("SELECT * FROM compte WHERE email=?");
                   $req->execute([$mail]); 
                   $user = $req->fetch();
                   if ($user) {
                       // email existe
                       echo " Ce mail existe déjà . ";
                   } else {
                       // email n'existe pas
                       
                       
                            //vérification mot de passe
                            if ($_POST['motdepasse'] === $_POST['motdepasse2']) {
                                
                                    //insertion dans la BDD
                                $insertion = $bdd-> prepare('INSERT INTO compte(nom, prenom, type_etablissement, 
                                    num_siret, mail, ville, code_postal, adresse, motdepasse
                                    values(:nom, :prenom, :type_etablissement, :num_siret, :mail, :ville, :code_postal
                                    , :adresse), :motdepasse');
                                
                                $insertion->execute(array(
                                    'nom' => $nom,
                                    'prenom' => $prenom,
                                    'type_etablissement' => $type_etablissement,
                                    'num_siret' => $num_siret,
                                    'email' => $mail,
                                    'ville' => $ville,
                                    'code_postal' => $code_postal,
                                    'adresse'=> $adresse,
                                    'mot_de_passe' => $motdepasse,
                                    ));

                                        header('Location: inscription.php');
                                        
                            } else {
                                    echo "Les mots de passe renseignés ne sont pas identiques";
                                }     
                    }
                     

             /* Faire une requête qui va interroger la base de donnée. On fait une requete préparer
            elle permet de préparer les requetes mais de ne pas les exécuter 
        
            $insertion = $bdd-> prepare('INSERT INTO compte(nom, prenom, Type_etablissement, 
            num_siret, mail, ville, code_postal, adresse values(:nom, :prenom, :Type_etablissement
            , :num_siret, :mail, :ville, :code_postal, :adresse)');

            $insertion->bindvalue(':nom, $nom'); // bindvalue permet de faire la liaison
            $insertion->bindvalue(':prenom, $prenom');
            $insertion->bindvalue(':Type_etablissement, $Type_etablissement');
            $insertion->bindvalue(':nnum_siretom, $num_siret');
            $insertion->bindvalue(':mail, $mail');
            $insertion->bindvalue(':ville, $ville');
            $insertion->bindvalue(':code_postal, $code_postal');
            $insertion->bindvalue(':adresse, $adresse');
            
            */

            }else{
                
                echo "Veuillez remplir tous les champs svp! Merci";
            }
        }


?>

