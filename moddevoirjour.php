<html lang="en">
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
        <ul class ="x">
            <a href="listedevoirdujour.php">listeDevoir</a>
            <a class="qui"  href="admin.php">Retour</a>
        </ul>
    </header> 
    <?php
    try{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hopital";
    $idmod=$_GET["id"];;

    // Connexion à la base de données
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $query = $conn->query('SELECT * from devoir WHERE devoir_id='.$idmod );
    while ($rowData=$query->fetch_assoc()){
        echo '
        <form action="traitmoddevoir.php" method="post">
    <fieldset>
        <p><label for="idp">personnel id</label>:<input id="idp" name ="idp" type="number" value="'.$rowData["devoir_id"].'"></p>
        <p><label for="nom">jour </label>:<input id="nom" name ="devj" type="date" value="'.$rowData["devoir_jours"].'"></p>
        <p><label for="cod">id patient</label>:<input id="cod" name ="idpat" type="number" value="'.$rowData["RV_patient_id"].'"></p>
        <p><label for="dat">chambre</label>:<input id="dat" name ="salle" type="number" value="'.$rowData["devoir_chambre_id"].'"></p>
        <p><label for="idp">personnel id</label>:<input id="idp" name ="idper" type="number" value="'.$rowData["personnel_id"].'"></p>
     </fieldset>
     <input type="submit"  value="modifier">
     </form>';
    }
}catch(exception $e){}
    ?>
</body>
</html>