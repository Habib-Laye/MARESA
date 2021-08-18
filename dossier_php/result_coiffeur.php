<?php
    require 'header.php'
?>
  
<!--Body-->
<br />  <br />  <br />

<div class="container-fluid">

  <div class="row">
    <div class="col-8">
        <h1>Prenez votre rdv en un clic</h1>
        <p>Facile, simple et rapide</p>
        <form class="form-inline" action="/recherche/" method="get">
            <fieldset>    
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input id="oSaisie" name="oSaisie" type="text" placeholder="Tours , France" 
                    class="form-control" aria-label="Saisie de mots clés" required="required">
                    <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Rechercher</button>
                    </div>
                </div>
            </fieldset> 
        </form>
        <br />  

        <button class="btn btn-primary" type="submit">Ajouter votre établissement</button>

    </div>
    <div class="col-4">21</div>
  </div>

  <br />
  <h3>Coiffeur à Tours</h3>
  <div class="row">
    <div class="col-8">
        <img src="image/coif.jpeg">
        <img src="image/coif.jpeg">
        <img src="image/coif.jpeg">
        <img src="image/barber.png">
        <img src="image/barber.png">
        <img src="image/barber.png">

    </div>

    <!--<h3>Les plus populaires</h3>-->

    <div class="col-4">
        <div class="row">
            <img src="image/coupe.jpeg">
            <i class="fas fa-star colorBleu">
                <h4> Barber</h4>
                <p>  Coupe à partir de 20£</p>
            </i>
        </div>

        <div class="row">
            <img src="image/coupe.jpeg">
            <i class="fas fa-star colorBleu">
                <h4> Chez Damien</h4>
                <p>  Coupe à partir de 25£</p>
            </i>
        </div>

    </div>
  </div>
  <br />  <br />

  <h3>Institut de beauté à Tours</h3>

  <br />
  <div class="row">

    <div class="col">
        <img src="image/barber.png">
    </div>

    <div class="col">
        <img src="image/coupe.jpeg">
    </div>

    <div class="col">
        <img src="image/coif.jpeg">
    </div>

    <div class="col">
        <img src="image/barber.png">
    </div>
  </div>

</div>

<!--Body-->
<br /><br />
<?php
    require 'footer.php'
?>
</body>
</html>