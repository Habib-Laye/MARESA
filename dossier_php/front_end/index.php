<?php
    require 'header.php'
?>
  
<!--Body-->
<br />  <br />  

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
<!--
    <p>
        <div class="mobileFiltreWrap filtre margFiltre">
          <div class="margFiltreTitre"><h5>Filtres</h5></div>&emsp;&emsp;
           rajoute 2 div flexAround pour separer en mobile 
           div1
                <i
                class="fas fa-hand-scissors filtreIcons flexCentre"
                ></i>&emsp;&emsp;
              <div class="filtreTexte flexCentre">Barbier</div>&emsp;&emsp;

              <i class="fas fa-child fa-lg filtreIcons flexCentre"></i>
              <div class="filtreTexte flexCentre">Salon de coiffure</div>
              <i class="fas fa-heart fa-lg filtreIcons flexCentre"></i>
              <div class="filtreTexte flexCentre">Institut de beauté</div>
          <div class="flexAround">
            <div class="flexBetween filtreTexteIcons">
              <i
                class="fas fa-hand-scissors filtreIcons flexCentre"
              ></i>
              <div class="filtreTexte flexCentre">Barbier</div>
            </div>
            <div class="flexBetween filtreTexteIcons">
              <i class="fas fa-child fa-lg filtreIcons flexCentre"></i>
              <div class="filtreTexte flexCentre">Salon de coiffure</div>
            </div>
          </div>
           div2 
          <div class="mobileFiltreWrap flexAround">
            <div class="flexBetween filtreTexteIcons">
              <i class="fas fa-heart fa-lg filtreIcons flexCentre"></i>
              <div class="filtreTexte flexCentre">Institut de beauté</div>
            </div>
          </div>
        </div>
    </p>
-->








    </div>
    <div class="col-4"></div>
  </div>

  <br />
  <h3>Coiffeur à Tours</h3>
  <div class="row bg-light" >
    <div class="col-8">
        <img src="image/coif.jpeg"> 
        <img src="image/coif.jpeg"> 
        <img src="image/coif.jpeg"> 
        <p>Coiffeur&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&ensp;&ensp;&ensp;
        Coiffeur1&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Coiffeur2</p>
        <p>Coupe à partir de 25£&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&ensp;
        Coupe à partir de 30£&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
        Coupe à partir de 35£</p>
        <p>
            <div>
                <i class="fas fa-star btn-blue"></i>
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorGris"></i>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorBleu"></i>  
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;     
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorGris"></i>
            </div>
        </p>
        <img src="image/barber.png"> 
        <img src="image/barber.png"> 
        <img src="image/barber.png"> 
        <p>Coiffeur3&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&ensp;&ensp;&ensp;
        Coiffeur4&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;Coiffeur5</p>
        <p>Coupe à partir de 22£&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;&ensp;
        Coupe à partir de 20£&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
        Coupe à partir de 28£</p>
        <p>
            <div>
                <i class="fas fa-star btn-blue"></i>
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorGris"></i>
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorBleu"></i>  
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;     
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorBleu"></i>
                <i class="fas fa-star colorGris"></i>
            </div>
    </div>

    <!--<h3>Les plus populaires</h3>-->

    <div class="col-4">
    <h3>Les plus populaires</h3>
    <br/>
        <div class="row">
            <img src="image/coupe.jpeg"><br />
            <i class="fas fa-star colorBleu">
                <h4> Barber</h4>
                <p>  Coupe à partir de 20£</p>
            </i>
        </div>
        <br/><br/>
        
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
        <img src="image/barber.png"><br/><br/>
        <p>institut1</p>
    </div>

    <div class="col">
        <img src="image/coupe.jpeg"><br/><br/>
        <p>institut2</p>
    </div>

    <div class="col">
        <img src="image/coif.jpeg"><br/><br/>
        <p>institut3</p>
    </div>

    <div class="col">
        <img src="image/barber.png"><br/><br/>
        <p>institut4</p>
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