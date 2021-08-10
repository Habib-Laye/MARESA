    <?php
    require 'header.php'
    ?>
    
    </br>
    <h1><p class='col-lg-8 offset-lg-5'>Identifiez-vous!</p></h1>
    </br>   

    <div class="formulaire">

        <form method="POST" action="connexiontraitement.php" class='col-lg-8 offset-lg-5'>
            
            <div class="form-group">
            <input  type="email" placeholder="Votre Email" name="email">
            </div>

            <div class="form-group">
            <input  type="password" placeholder="Votre mot de passe" name="motdepasse">
            </div>

            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Souvenez-vous de moi
                </label>
            </div>

            <div class="form-group">
            <button type="submit" class="btn btn-primary" name="connecter">Se connecter</button>
            </div>

            <a href="#">Mot de passe oublié</a>
            <p>Première fois?</p>

            <div class="form-group">
            <button type="submit" class="btn btn-primary" name="inscris">S'inscrire</button>
            </div>

        </form>

    </div>
   
    <!-- Fin du body -->

    
       


