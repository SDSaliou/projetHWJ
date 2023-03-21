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
    <form action="suppressionRV.php" method="post">
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
    $query = $conn->query('SELECT * from rendezvous WHERE rv_id='.$idmod );
    while ($rowData=$query->fetch_assoc()){
        echo '
        <form action="traitsupRV.php" method="post">
    <fieldset>
        <p><label for="idp">rv id</label>:<input id="idp" name ="idp" type="number" value="'.$rowData["rv_id"].'"></p>
        <p><label for="nom">patient id</label>:<input id="nom" name ="name" type="texte" value="'.$rowData["rv_patient_id"].'"></p>
        <p><label for="med">medecin</label>:<input id="med" name ="med" type="number" value="'.$rowData["rv_personnel_id"].'"></p>
        <p><label for="date">date</label>:<input id="date" name ="date" type="date" value="'.$rowData["rv_date"].'"></p>
     </fieldset>
     <input type="submit" value="supprimer">
     </form>';
    }
    ?>
</body>
</html>