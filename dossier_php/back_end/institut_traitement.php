<?php

if(isset($_POST['rechercher'])) {

    $nom = htmlspecialchars($_POST['nom']); 
    $ville = htmlspecialchars($_POST['ville']); 
    $code_postal = htmlspecialchars($_POST['code_postal']); 
    $adresse = htmlspecialchars($_POST['adresse']);
    $type_etablissement = htmlspecialchars($_POST['type_etablissement']);


    if(!empty($nom) AND
        !empty($ville) AND !empty($code_postal) AND !empty($adresse) AND !empty($type_etablissement)) 
        {
    
    require_once 'db.php';
    
    $req = $bdd->prepare("SELECT nom FROM compte WHERE nom=:nom AND type_etablissement = :type_etablissement");
    
    $req->execute(Array('nom'=> $nom, 'type_etablissement' => $type_etablissement)); 
           
    $donnees = $req->fetch();
     // var_dump($donnees);
    if ($donnees) { //les données récupérés seront mis dans la variable donnees
        
         // echo 'L\'établissement est présent dans la base de donnée';
          header('Location: institut_rdv.php');


    } else {

        echo 'L\'établissement n\'est pas présent dans la base de donnée';

    }

        }

}

?>