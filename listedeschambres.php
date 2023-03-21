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
                 Patient_frais
            </button>  
            <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="listedespatients.php">les frais </a></li>
                <li><a class="dropdown-item" href="listedeshospitalisation.php">ajouter</a></li>
                <li><a class="dropdown-item" href="listedesrv.php">modifier</a></li>
            </ul>
        </div> 
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                materielle_frais
            </button>
            <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="listedesmaterielles.php">la liste </a></li>
                    <li><a class="dropdown-item" href="suppersonnel.php"> ajouter</a></li>
                    <li><a class="dropdown-item" href="Rechercheinfirmiercode.php">modifier</a></li>
                    <li><a class="dropdown-item" href="listedeschambres.php">chambres</a></li>
            </ul>
        </div> 
        <ul class ="x">
            <a href="#">Payer</a>
            <a class="qui"  href="Accueil.php">Deconnecté</a>
            
        </ul>
    </header>
    <form action="listedeschambres.php" method="post"> 
    <table>
    <tr>
      <th> id </th>
      <th >Categorie</th>
      <th >nombre de lits  </th>
      <th > materielle dispo </th>
      <th > prix </th>
  </tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hopital";
// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);
$query = $conn->query('SELECT * from chambre');
while ($rowData=$query->fetch_assoc()){
  
echo '
  <tr>
    <td > '.$rowData["chambre_id"].'</td>
    <td > '.$rowData["chambre_categorie"].' </td>
    <td > '.$rowData["nbre_lit"].' </td>
    <td > '.$rowData["chambre_materielle"].' </td>
    <td > '.$rowData["chambre_prix"].' </td>
   </tr>';
  }
  ?>
  </table><br>
</form>

</body>
</html>