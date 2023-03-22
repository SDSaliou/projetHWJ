<?php 


?>
<html lang="'en">
  <head>
    <link rel="stylesheet" href="liste.css">
  </head>
<body>
  <h1> dossier medical du patient </h1>
<table >
 
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
$idpatient=$_GET["id"];
// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);
$query = $conn->query('SELECT * from admission WHERE patient_id='.$idpatient);
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
