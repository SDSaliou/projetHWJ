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
  <h1> La liste de mes Devoirs</h1>
<table >
 
  <form action="mesdevoirs.php" method="post"> 
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
$dev=$_GET["id"];
// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);
$query = $conn->query('SELECT * from devoir WHERE personnel_id='.$dev);
while ($rowData=$query->fetch_assoc()){
  
echo '
  <tr >
  <td > '.$rowData["devoir_id"].'</td>
  <td > '.$rowData["devoir_jours"].' </td>
  <td > '.$rowData["RV_patient_id"].' </td>
  <td > '.$rowData["devoir_chambre_id"].' </td>
  <td > '.$rowData["personnel_id"].' </td>
  </tr>';}
  ?>
  </table><br>
</body>
</html>
