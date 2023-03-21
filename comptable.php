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
                 Patient_frais
            </button>  
            <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="listefrais.php">les frais </a></li>
                <li><a class="dropdown-item" href="listedespatients.php">patient</a></li>
                <li><a class="dropdown-item" href="listedeshospitalisation.php">hospitalisation</a></li>
            </ul>
        </div> 
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                materielle/chambre
            </button>
            <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="listedesmaterielles.php">materielle </a></li>
            
                    <li><a class="dropdown-item" href="listedeschambres.php">chambres</a></li>
            </ul>
        </div> 
        <ul class ="x">
        <a href="#"><?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "hopital";
                        $id=$_GET["idcom"];
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        $query = $conn->query('SELECT personnel_name from personnels WHERE personnel_id='.$id);
                        while ($rowData=$query->fetch_assoc()){
                        echo $rowData["personnel_name"];}
                        ?>
                        </a>
            <a class="qui"  href="Accueil.php">Deconnecté</a>
        </ul>
    </header>
   
       <h1> En Cours de travaux </h1>
       <h1>mais vous pouvez voir les divers frais </h1>
    
</body>
</html>