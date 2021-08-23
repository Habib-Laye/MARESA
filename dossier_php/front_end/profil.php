<?php
    require 'header.php'
?>

<br /><br />
<h1><p class='col-lg-6 offset-lg-4'>Espace personnel</p></h1>
<br /><br />

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
        <fieldset class="border p-2">
            <legend class="w-auto">Mes informations:</legend>
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname"><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>
            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday"><br><br>
            <input type="submit" value="Submit">
        </fieldset>
        </div>

        <div class="col-6">
        <fieldset class="border p-2">
            <legend class="w-auto">Mes rendez-vous </legend>
            <p>Vous n'avez pas encore pris de rendez-vous.</p>
            <input type="submit" value="Prendre rendez-vous" name="rendezvous">
        </fieldset>
        </div>

    </div>

    <br /><br />               
    <?php
        require 'footer.php'
      ?>                
    

</body>
</html>
