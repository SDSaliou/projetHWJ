<html lang="'en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <header class="entete">
        <img class="imgx" mat-card-image src= "assets/logo.jpg" width="150" >
        <div class="logo"> <span ></div> 
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Patients
            </button>  
            <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="listedespatients.html">liste des patients </a></li>
                <li><a class="dropdown-item" href="listedeshospitalisation.php">hospitalisation</a></li>
                <li><a class="dropdown-item" href="listedesrv.php">Rendez-vous</a></li>
            </ul>
        </div> 
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Personnels
            </button>
            <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#ajout">Ajouter un medecin</a></li>
                    <li><a class="dropdown-item" href="#ajout">Ajouter un(e) infirmier(e)</a></li>
                    <li><a class="dropdown-item" href="#">supprimer</a></li>
                    <li><a class="dropdown-item" href="#">modifier</a></li>
            </ul>
        </div> 
        <ul class ="x">
            <a class="qui"  href="Accueil.php">Deconnecté</a>
        </ul>
    </header>
    <form action="suppersonnel.php" method="post">
		<label for="username"> vous voulez supprimer:</label>
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
    $idmod=$_POST["username"];

    // Connexion à la base de données
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $query = $conn->query('SELECT * from personnels WHERE  personnel_id='.$idmod );
    while ($rowData=$query->fetch_assoc()){
        echo '
        <form action="traisuppersonnel.php" method="post">
    <fieldset>
        <p><label for="idp">personnel id</label>:<input id="idp" name ="idp" type="number" value="'.$rowData["personnel_id"].'"></p>
        <p><label for="nom">Nom et Prenom </label>:<input id="nom" name ="name" type="texte" value="'.$rowData["personnel_name"].'"></p>
        <p><label for="cod">code patient</label>:<input id="cod" name ="code" type="number" value="'.$rowData["personnel_code"].'"></p>
        <p><label for="dat">Horaire</label>:<input id="dat" name ="horaire" type="time" value="'.$rowData["horaire"].'"></p>
        </fieldset>
     <input type="submit"  value="supprimer">
     </form>';
    }
}catch(exception $e){}
    ?>
</body>
</html>