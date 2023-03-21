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
  <h1> La liste de mes Patients</h1>
<table >
 
  <form action="mespatients.php" method="post"> 
  <tr> 
      <th> id </th>
      <th >date admission </th>
      <th > id patient </th>
      <th>Consultation</th>
      <th>infirmier</th>
      <th> Symptomes</th>
      <th>diagnostic</th>
      <th>traitement</th>
      <th>medecin</th>
      <th>test à faire</th>
  </tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hopital";
$patient=$_GET["id"];
// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);
$query = $conn->query('SELECT * from admission WHERE personnel_id='.$patient. ' OR personnel_med_id='.$patient);
while ($rowData=$query->fetch_assoc()){
  
echo '
  <tr >
    <td > '.$rowData["id"].'</td>
    <td> ' .$rowData["date_admission"].'</td>
    <td> ' .$rowData["patient_id"].'</td>
    <td> ' .$rowData["consultation"].'</td>
    <td> ' .$rowData["personnel_id"].'</td>
    <td> ' .$rowData["symptomes"].'</td>
    <td> ' .$rowData["diagnostic"].'</td>
    <td> ' .$rowData["traitement"].'</td>
    <td > '.$rowData["personnel_med_id"].' </td>
    <td> ' .$rowData["test"].'</td>
  </tr>';}
  ?>
  </table><br>
</body>
</html>
