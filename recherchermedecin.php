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
            <a href="#">Hospitalisation </a>
              <a href="#">personnelName</a>           
              <a href="Accueil.html">Deconnecté </a>
          </ul>
    </header>
	<h1>Search</h1>
	<form action="Recherchemedecin.php" method="post">
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
    if ($select=="nom"){
        $recherche=('SELECT * from personnels WHERE personnel_service_id=2 AND personnel_name="'.$idsearch.'"');
    }elseif ($select=="code"){
        $recherche=('SELECT * from personnels WHERE personnel_service_id=2  AND personnel_code='.$idsearch);
    }    
    $query = $conn->query($recherche);
    while ($rowData=$query->fetch_assoc()){
        echo '
    <fieldset>
        <p><label for="nom">Nom et Prenom </label>:<input id="nom" name ="name" type="texte" value="'.$rowData["personnel_name"].'"></p>
        <p><label for="nom">code patient</label>:<input id="nom" name ="code" type="number" value="'.$rowData["personnel_code"].'"></p>
        <p><label for="dat">Horaire</label>:<input id="dat" name ="horaire" type="time" value="'.$rowData["horaire"].'"></p>
        </fieldset>';
    }
}catch(exception $e){}
    ?>
</body>
</html>