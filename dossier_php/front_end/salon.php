
<?php
    require 'header.php'
?>

</br></br>  

<div class="container">
    <div class="row">
        <div class="col ">
            <img src="image/salcoif.jpg"> 
        </div>
        
        <div class="col ">
        </br> </br> </br> 
            <h2 class='col-lg-6 offset-lg-3'>Salon</h2></br> 

            <form method="POST" action="salon_traitement.php" class='col-lg-6 offset-lg-3'>
                <div class="form-group">
                    <input type="text" placeholder= "Nom" name="nom">
                </div>

                <div class="form-group">
                    <input type="text" placeholder= "Ville" name="ville">
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

        
        
        <div class="col ">
            <img src="image/salcoif2.jpg"> 
        </div>


    </div>
</div>

<?php
    require 'footer.php'
?>
</body>
</html>

