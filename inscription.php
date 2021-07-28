<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Inscrivez-vous !</title>
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        
        <link rel="stylesheet" type="text/css" href= "inscription.css" />
        
        
    </head>
    <body>
       
       <?php
        require header.php
        ?>
        <!-- body -->

        <div class="formulaire">

        <form method="post" action="inscription1.php">
            <div class="form-group">
            <input type="text" placeholder= "Nom" name="nom"><br/>
            <input type="text" placeholder= "Prenom" name="prenom"><br/>
            <select name='ld'>
                <option value="critere0">Type d'établissements</option>
                <option value="critere1">Coiffeur</option>
                <option value="critere2">Salon de coiffure</option>
                <option value="critere3">Institut de beaute</option>
            </select><br/>
            <input type="text" placeholder= "Numéro siret" name="num_siret"><br/>
            <input  type="email" placeholder="Votre Email" name="mail"><br/>
            <input type="text" placeholder= "Ville" name="ville"><br/>
            <input type="text" placeholder= "Code postal" name="code_postal"><br/>
            <input type="text" placeholder= "Adresse" name="adresse"><br/><br/>
            <input type="password" placeholder= "Mot de passe" name="motdepasse"><br/>
            <input type="password" placeholder= " Confirmation Mot de passe" name="motdepasse"><br/>
            <button type="submit" name="valider">Valider</button>

        </form>

        </div>

            
        <!-- footer -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            
        <!-- Fin du footer -->

    </body>
</html>