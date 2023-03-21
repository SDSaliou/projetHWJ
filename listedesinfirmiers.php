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
    <link rel="stylesheet" href="liste.css">
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
                    <li><a class="dropdown-item" href="#ajout">Ajouter un(e) medecin </a></li>
                    <li><a class="dropdown-item" href="suppersonnel.php"> supprimer un medecin</a></li>
                    <li><a class="dropdown-item" href="Recherchermedecinparcode.php"> rechercher un medecin</a></li>
                    <li><a class="dropdown-item" href="modifiermedecin.php">modifier un medecin</a></li>
            </ul>
        </div> 
        <ul class ="x">
            <a class="qui"  href="Accueil.php">Deconnecté</a>
            <a href="admin.php">Retour</a>
        </ul>
    </header>
<body>
  <h1> La liste des infirmiers </h1>
<table >
 
  <tr> 
      <th> id </th>
      <th >Nom et Prenom </th>
      <th > code </th>
  </tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hopital";
// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);
$query = $conn->query('SELECT * from personnels WHERE personnel_service_id=3' );
while ($rowData=$query->fetch_assoc()){
  
echo '
  <tr  >
    <td > '.$rowData["personnel_id"].'</td>
    <td> ' .$rowData["personnel_name"].'</td>
    <td > '.$rowData["personnel_code"].' </td>
    <td>'.$rowData["horaire"].' </td>
  </tr>';}
  ?>
  </table><br>
</body>
</html>