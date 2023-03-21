
  <!DOCTYPE html>
  <html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="liste.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header class="entete">
        <img class="imgx" mat-card-image src= "assets/logo.jpg" width="150" >
        <div class="logo"> <span ></div> 
    </header>
<body>
  <h1> La liste des Hospitalisations </h1>
<table >
 
  <tr> 
      <th> id </th>
      <th > id patient</th>
      <th> date d'entrée </th>
      <th> date d'entrée </th>
      <th > id medecin/infirmier  </th>
      <th > Chambre</th>
      <th> nombre de nuit</th>
  </tr>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hopital";
// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);
$query = $conn->query('SELECT * from hospitalisation');
while ($rowData=$query->fetch_assoc()){
  
echo '
  <tr  *ngFor="let element of tabListe">
    <td > '.$rowData["hospitalisation_id"].'</td>
    <td > '.$rowData["hospitalisation_patient_id"].' </td>
    <td > '.$rowData["Date_arriv"].' </td>
    <td > '.$rowData["Date_sort"].' </td>
    <td > '.$rowData["hospitalisation_personnel_id"].'</td>
    <td > '.$rowData["hospitalisation_chambre_id"].' </td>
    <td > '.$rowData["nbre_nuit"].' </td>
  </tr>';}
  ?>
  </table><br>

	<h1>Search</h1>
	<form action="listedeshospitalisation.php" method="post">
		<label for="username">recherche:</label>
		<input type="text" name="username" id="username">
		<br><br>
		<input type="submit" value="Search">
	</form>
    <?php
    try{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hopital";
    $idsearch=$_POST["username"];


    // Connexion à la base de données
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $query = $conn->query('SELECT * from hospitalisation WHERE hospitalisation_patient_id='.$idsearch );

    while ($rowData=$query->fetch_assoc()){
        echo '
    <fieldset>
    <p><label for="id"> Id</label>:<input id="nom" name ="id" type="texte" value="'.$rowData["hospitalisation_id"].'"></p>
    <p><label for="id">Id patient</label>:<input id="id" name ="id" type="texte" value="'.$rowData["hospitalisation_patient_id"].'"></p>
    <p><label for="date">Date entrée</label>:<input id="date" name ="date" type="date" value=" '.$rowData["Date_arriv"].' "></p>
    <p><label for="date">Date sortie</label>:<input id="date" name ="date" type="date" value="'.$rowData["Date_sort"].' "></p>
    <p><label for="id">Id medecin/infirmier</label>:<input id="id" name ="id" type="texte" value=" '.$rowData["hospitalisation_personnel_id"].'"></p>
    <p><label for="id">chambre</label>:<input id="id" name ="id" type="texte" value=" '.$rowData["hospitalisation_chambre_id"].' "></p>
    </fieldset>';
    }
  }catch(exception $e){}
    ?>
</body>
</html>
</body>
</html>