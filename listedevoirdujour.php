<html lang="en">
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
            <a href="Accueil.php">Deconnecté</a>
            <a class="qui"  href="admin.php">Retour</a>
        </ul>
    </header>
  <h1> La liste des devoirs </h1>
<table >
 
  <form action="moddevoirjour.php" method="post"> 
    <tr>
      <th> id </th>
      <th >date  </th>
      <th > RV_id_patient </th>
      <th > chambre? </th>
      <th > ip personnel</th>
  </tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hopital";
// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);
$query = $conn->query('SELECT * from devoir');
while ($rowData=$query->fetch_assoc()){
  
echo '
  <tr>
    <td > '.$rowData["devoir_id"].'</td>
    <td > '.$rowData["devoir_jours"].' </td>
    <td > '.$rowData["RV_patient_id"].' </td>
    <td > '.$rowData["devoir_chambre_id"].' </td>
    <td > '.$rowData["personnel_id"].' </td>
    <td> <a href="moddevoirjour.php?id='.$rowData["devoir_id"].'">modifier</a></td>
    <td> <a href="supdevoirjour.php?id='.$rowData["devoir_id"].'">supprimer</a></td>
   </tr>';
  }
  ?>
  <td> <a href="ajoutdevoir.php">ajouter</a></td>
  </table><br>
</form>
</body>
</html>
