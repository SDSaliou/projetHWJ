<?php 


?>
<html lang="en">
  <head>
     <link rel="stylesheet" href="liste.css">
  </head>
<body>
  <h1> La liste des Rendez-vous </h1>
<table >
 
  <tr> 
      <th> id </th>
      <th > id patient</th>
      <th > id medecin </th>
      <th > jour Rendez-vous</th>
  </tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hopital";
// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);
$query = $conn->query('SELECT * from rendezvous');
while ($rowData=$query->fetch_assoc()){
  
echo '
  <tr  *ngFor="let element of tabListe">
    <td > '.$rowData["rv_id"].'</td>
    <td > '.$rowData["rv_patient_id"].' </td>
    <td > '.$rowData["rv_personnel_id"].' </td>
    <td > '.$rowData["rv_date"].' </td>
  </tr>';}
  ?>
  </table><br>

  
</body>
</html>
