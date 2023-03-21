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
        <ul class ="x">
            <a class="qui"  href="Accueil.php">Deconnecté</a>
        </ul>
    </header>

    <h1> La liste des materielles </h1>
<table >
 
  <form action="listedesmaterielles.php" method="post"> 
    <tr>
      <th> id </th>
      <th > type</th>
      <th >nombre  </th>
      <th > fournisseur </th>
      <th > prixTotal </th>
      <th > Date entrée </th>
      <th> Date sortie</th>
  </tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hopital";
// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);
$query = $conn->query('SELECT * from materielles');
while ($rowData=$query->fetch_assoc()){
  
echo '
  <tr>
    <td > '.$rowData["materiel_id"].'</td>
    <td > '.$rowData["materiel_type"].' </td>
    <td > '.$rowData["materiel_nbre"].' </td>
    <td > '.$rowData["materiel_namefour"].' </td>
    <td > '.$rowData["materiel_prix"].' </td>
    <td > '.$rowData["materiel_DateE"].' </td>
    <td> '.$rowData["materiel_DateS"].'</td>
   </tr>';
  }
  ?>
  </table><br>
</form>
</body>
</html>
