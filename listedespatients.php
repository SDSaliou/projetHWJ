<html lang="'en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="liste.css">
</head>
<body>
    <header class="entete">
    <img class="imgx" mat-card-image src= "assets/logo.jpg" width="150" >
        <div class="logo"> <span >Werral Ak Jamm </span> Les malades avant tout</div>  
        <ul class ="x">
            <a class="qui"  href="Accueil.php">Deconnecté</a>
        </ul>
    </header>
  <h1> La liste des Patients</h1>
<table >
 
  <form action="dossierpatient.php" method="post"> 
    <tr>
      <th> id </th>
      <th > Nom et Prénom</th>
      <th >date de naissance  </th>
      <th > code du patient </th>
      <th > numero assurance </th>
      <th > telephone </th>
      <th> dossir</th>
  </tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hopital";
// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);
$query = $conn->query('SELECT * from patients');
while ($rowData=$query->fetch_assoc()){
  
echo '
  <tr>
    <td > '.$rowData["patient_id"].'</td>
    <td > '.$rowData["patient_name"].' </td>
    <td > '.$rowData["patient_birthday"].' </td>
    <td > '.$rowData["patient_code"].' </td>
    <td > '.$rowData["patient_numAM"].' </td>
    <td > '.$rowData["patient_num"].' </td>
    <td> <a href="dossierpatient.php?id='.$rowData["patient_id"].'">VoirDossier</a></td>
   </tr>';
  }
  ?>
  </table><br>
</form>
</body>
</html>
