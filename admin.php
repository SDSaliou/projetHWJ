<html lang="'en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <header class="entete">
        <img class="imgx" mat-card-image src= "assets/logo.jpg" width="150" >
        <div class="logo"> <span ></div> 
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Patients
            </button>  
            <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="listedespatients.php">liste des patients </a></li>
                <li><a class="dropdown-item" href="listedeshospitalisation.php">hospitalisation</a></li>
                <li><a class="dropdown-item" href="listedesrv.php">Rendez-vous</a></li>
            </ul>
        </div> 
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                infirmier
            </button>
            <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="listedesinfirmiers.php">liste des infirmiers </a></li>
                    <li><a class="dropdown-item" href="#ajout">Ajouter un(e) infirmier(e) </a></li>
                    <li><a class="dropdown-item" href="suppersonnel.php"> supprimer un(e) infirmier(e)</a></li>
                    <li><a class="dropdown-item" href="Rechercheinfirmiercode.php">rechercher un(e) infirmier(e)</a></li>
                    <li><a class="dropdown-item" href="modifierinfirmier.php">modifier un(e) infirmier(e)</a></li>
            </ul>
        </div> 
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                medecin
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="listedesmedecin.php">liste des medecins </a></li>
                    <li><a class="dropdown-item" href="#ajout">Ajouter un(e) medecin </a></li>
                    <li><a class="dropdown-item" href="suppersonnel.php"> supprimer un medecin</a></li>
                    <li><a class="dropdown-item" href="Recherchermedecinparcode.php"> rechercher un medecin</a></li>
                    <li><a class="dropdown-item" href="modifiermedecin.php">modifier un medecin</a></li>
            </ul>
        </div> 
        <ul class ="x">
        <a href="#"><?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "hopital";
                        $id=$_GET["idad"];
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        $query = $conn->query('SELECT personnel_name from personnels WHERE personnel_id='.$id);
                        while ($rowData=$query->fetch_assoc()){
                        echo $rowData["personnel_name"];}
                        ?></a>
            <a href="listedevoirdujour.php">listeDevoir</a>
            <a class="qui"  href="Accueil.php">Deconnecté</a>
        </ul>
    </header>
    
    <br><br>
    <center class="row"><div>
        <form method="post" id="first" action= "traitajoutpersonnel.php">
            <fieldset>
                <legend>Ajout personnel</legend>                    
                <p><label for="Service">Service</label>: <input id="Service" name="Service" type="radio" value="2"> medecin
                <input id="Service" name="Service" type="radio" value="3"> infirmier</p>
                <p><label for="name">personnel_name</label>:<input id="name" name="name" type="texte" ></p>
                <p><label for="code">code</label>:<input id="code" name ="code" type="number" required> </p>
                <p><label for="dat">Horaire</label>:<input id="dat" name ="horaire" type="date"></p>
                <input  type="submit" value="Ajouter">
            </fieldset>
        </form>
    </div></center>

    <center class="row">
        <form method="post" id="first" action= "traitajouthosp.php">
            <fieldset>
                <legend>Ajout hospitalisation</legend>
                <p><label for="id">Id patient</label>:<input id="id" name ="id" type="number" ></p>
                <p><label for="date">Date entrée</label>:<input id="date" name ="dateE" type="date" ></p>
                <p><label for="date">Date sortie</label>:<input id="date" name ="dateS" type="date" ></p>
                <p><label for="id">Id medecin/infirmier</label>:<input id="id" name ="idmed" type="number" ></p>
                <p><label for="id">chambre</label>:<input id="id" name ="salle" type="number" ></p>
                <input  type="submit" value="Valider">
            </fieldset>
       </form>
    </center>
</body>
</html>
