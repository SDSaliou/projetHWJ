<html lang="'en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="medecin.css">
</head>
<body>
    <header class="entete">  
        <img class="imgx" mat-card-image src= "assets/logo.jpg" width="150" >
        <div class="logo"> <span ></div> 
    </header>
    <form action="suppressionhosp.php" method="post">
		<label for="username">Vueillez donner l'id</label>
		<input type="text" name="username" id="username">
		<br><br>
		<input type="submit" value="Search">
	</form>
    
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hopital";
    $idmod=$_POST["username"];

    // Connexion à la base de données
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $query = $conn->query('SELECT * from hospitalisation WHERE hospitalisation_id='.$idmod);
    while ($rowData=$query->fetch_assoc()){
        echo '
        <form method="post" id="first" action= "traitsuphosp.php">
        <fieldset>
            <p><label for="id">Id patient</label>:<input id="id" name ="idp" type="number" value="'.$rowData["hospitalisation_id"].'"></p>
            <p><label for="id">Id patient</label>:<input id="id" name ="idp" type="number" value="'.$rowData["hospitalisation_patient_id"].'"></p>
            <p><label for="date">Date entrée</label>:<input id="date" name ="dateE" type="date" value="'.$rowData["Date_arriv"].'"></p>
            <p><label for="date">Date sortie</label>:<input id="date" name ="dateS" type="date" value="'.$rowData["Date_sort"].'"></p>
            <p><label for="id">Id medecin/infirmier</label>:<input id="id" name ="idmed" type="number"value="'.$rowData["hospitalisation_personnel_id"].'" ></p>
            <p><label for="id">chambre</label>:<input id="id" name ="salle" type="number" value="'.$rowData["hospitalisation_chambre_id"].'" ></p>
            <input  type="submit" value="supprimerr">
        </fieldset>
   </form>';
    }
    ?>
</body>
</html>