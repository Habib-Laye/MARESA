<?php
    require 'header.php'
?>
  
<!--Body-->
<br />  <br />  

<div class="container-fluid">

  <div class="row">
    <div class="col-8">
        <h2>Prenez rapidement rdv avec votre coiffeur favori</h2>
        <p>Facile, simple et rapide</p>
        <form class="form-inline" action="/recherche/" method="get">
            <fieldset>    
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input id="oSaisie" name="oSaisie" type="text" placeholder="Nom du coiffeur" 
                    class="form-control" aria-label="Saisie de mots clés" required="required">
                    <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Rechercher</button>
                    </div>
                </div>
            </fieldset> 
        </form>
        <br />  
    </div>

    <div class="col-4"></div>
  </div>

  <br />
  <h3>Coiffeur à Paris</h3>
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

  <h3>Coiffeur à proximité de votre position</h3>

  <br />
  <div class="row">

    <div class="col">
        <img src="image/barber.png"><br/><br/>
        <p>Coiffeur1</p>
    </div>

    <div class="col">
        <img src="image/coupe.jpeg"><br/><br/>
        <p>Coiffeur2</p>
    </div>

    <div class="col">
        <img src="image/coif.jpeg"><br/><br/>
        <p>Coiffeur3</p>
    </div>

    <div class="col">
        <img src="image/barber.png"><br/><br/>
        <p>Coiffeur4</p>
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