<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
      integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway&display=swap"
      rel="stylesheet"
    />

</head>
<body>
    <header class="navbar navbar-expand-md bg-dark >
        <nav  navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">Maresa</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="coiffeur.php">Coiffeur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="institut.php">Institut de beauté</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="salon.php">Salon de coiffure</a>
            </li>
            </ul>
        </div>


        <div class="dropdown" style="margin-left: 700px" id="collapsibleNavbar2">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">  Mon compte 
        </button>
        <div class="dropdown-menu bg-light" >
            <a class="dropdown-item  btn-secondary" href="connexion.php">Se connecter</a>
            <a class="dropdown-item" href="profil.php">Profil</a>
            <a class="dropdown-item" href="connexion.php">Déconnexion</a>
        </div>
        
        </div>

    </nav>
    </header>






