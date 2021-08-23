<?php
    require 'header.php'
?>

</br> </br> 


<div class="container">
    <div class="row d-flex justify-content-center flex-nowrap">
        <div class="col ">
            <img src="image/coif2.jpg"> 
        </div>

        <div class="col">
        </br> </br> 
        <h3 class='col-lg-6 offset-lg-2'>Coiffeur</h3></br>

        <form method="POST" action="coiffeurtraitement.php" class='col-lg-6 offset-lg-2'>
            <div class="form-group">
                <input type="text" placeholder= "Nom" name="nom">
            </div>

            <div class="form-group">
                <input type="text" placeholder= "Prénom" name="prenom">
            </div>

            <div class="form-group">
                <input type="text" placeholder= "Ville" name="ville">
            </div>

            <!-- Type d'établissement -->

            <div class="form-group">
                        <select name='type_etablissement'>
                            <option value="critere0">Type d'établissements</option>
                            <option value="Coiffeur">Coiffeur</option>
                            <option value="Salon de coiffure">Salon de coiffure</option>
                            <option value="Institut de beaute">Institut de beaute</option>
                        </select>
            </div>

            <!-- Fin type d'établissement -->

            <div class="form-group">
                <input type="text" placeholder= "Code postal" name="code_postal">
            </div>

            <div class="form-group">
                <input type="text" placeholder= "Adresse" name="adresse">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="rechercher">Rechercher</button>
            </div>
        </form>

        </div>

        <div class="col">
            <img src="image/coif.jpg"> 
        </div>

    </div>

</div>
</br>
<?php
    require 'footer.php'
?>

</body>
</html>

