<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Receptionniste.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header class="entete">
        <img class="imgx" mat-card-image src= "assets/logo.jpg" width="150" >
        <div class="logo"> <span ></div> 
          <div class="dropdown">
          <ul class="x">
                      
              <a href="Accueil.html">Deconnecté </a>
          </ul>
    </header>
	<h1>User Search</h1>
	<form action="modifierpatient.php" method="post">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username">
		<br><br>
		<input type="submit" value="Search">
	</form>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hopital";
    $idsearch=$_POST["username"];

    // Connexion à la base de données
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $query = $conn->query('SELECT * from patients WHERE patient_id='.$idsearch );
    while ($rowData=$query->fetch_assoc()){
        echo '
        <form action="traitementmodifier.php" method="post">
    <fieldset>
        <p><label for="nom">patient_id</label>:<input id="nom" name ="idpatient" type="number" value="'.$rowData["patient_id"].'"></p>
        <p><label for="nom">Nom et Prenom </label>:<input id="nom" name ="name" type="texte" value="'.$rowData["patient_name"].'"></p>
        <p><label for="date">date de naissance </label>:<input id="date" name ="date" type="date"></p>
        <p><label for="tel">telephone</label>:<input id="tel" name ="tel" type="tel" value="'.$rowData["patient_num"].'"> </p>
        <p><label for="asMaladie">numéro assurance maladie</label>:<input id="asMaladie" name ="assurance" type="text"  value="'.$rowData["patient_numAM"].'"> </p>
        <p><label for="nom">code patient</label>:<input id="nom" name ="code" type="number" value="'.$rowData["patient_code"].'"></p>
     </fieldset>
     <input type="submit" >
     </form>';
    }
    ?>
</body>
</html>