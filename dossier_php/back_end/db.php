
<?php

    $dsn='mysql:host=localhost; port=3306; dbname=maresa_bdd';
    $dbUser='root';
    $pw='';
    $pdo=new PDO($dsn, $dbUser, $pw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    try{
    $bdd = new PDO('mysql:host=localhost;dbname=maresa_bdd', 'root', '');
    }catch(Exception $e){
        die('Erreur: '.$e-> getMessage());
    }
    

?> 