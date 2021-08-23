 
       
       <?php
        require 'header.php'
        ?>

        </br>
        <h1><p class='col-lg-8 offset-lg-5'>Inscription</p></h1>
        </br>

        <div class="row">

            <form method="POST" action="inscription1.php" class='col-lg-8 offset-lg-5'>
                
                <div class="form-group">
                <input type="text" placeholder= "Nom" name="nom">
                </div>

                <div class="form-group">
                <input type="text" placeholder= "Prenom" name="prenom">
                </div>

                <div class="form-group">
                    <select name='type_etablissement'>
                        <option value="critere0">Type d'établissements</option>
                        <option value="Coiffeur">Coiffeur</option>
                        <option value="Salon de coiffure">Salon de coiffure</option>
                        <option value="Institut de beaute">Institut de beaute</option>
                    </select>
                </div>

                <div class="form-group">
                <input type="text" placeholder= "Numéro siret" name="num_siret">
                </div>

                <div class="form-group">
                <input  type="email" placeholder="Votre Email" name="email">
                </div>

                <div class="form-group">
                <input type="text" placeholder= "Ville" name="ville">
                </div>

                <div class="form-group">
                <input type="text" placeholder= "Code postal" name="code_postal">
                </div>

                <div class="form-group">
                <input type="text" placeholder= "Adresse" name="adresse">
                </div>

                <div class="form-group">
                <input type="password" placeholder= "Mot de passe" name="motdepasse">
                </div>

                <div class="form-group">
                <input type="password" placeholder= " Confirmation" name="motdepasse2">
                </div>

                <div class="form-group">
                <button type="submit" class="btn btn-primary" name="valider">Valider</button>
                </div>


            </form>

        </div>

    <?php
        require 'footer.php'
    ?>
</body>
</html>
    

        
