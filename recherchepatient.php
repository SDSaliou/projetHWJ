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
	<h1>Search</h1>
	<form action="recherchepatient.php" method="post">
   <p>Type de recherche: <select name="choix">
              <option> </option>
                  <option>nom</option>
                  <option>code</option>
                  <option>numAss</option>
                  <option>num</option>
              </select>
  </p>
		<label for="username">Username:</label>

		<input type="search" name="username" id="username">
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
    $select=$_POST["choix"];


    // Connexion à la base de données
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($select=="nom"){
        $recherche=('SELECT * from patients WHERE  patient_name="'.$idsearch.'"');
    }elseif ($select=="code"){
        $recherche=('SELECT * from patients WHERE   patient_code='.$idsearch);
    }elseif ($select=="numAss"){
        $recherche=('SELECT * from patients WHERE   patient_numAM="'.$idsearch.'"');
    }elseif ($select=="num"){
        $recherche=('SELECT * from patients WHERE  patient_num='.$idsearch);
    }    
    $query = $conn->query($recherche);
    while ($rowData=$query->fetch_assoc()){
        echo '
    <fieldset>
    <p><label for="nom">id </label>:<input id="nom" name ="id" type="number" value="'.$rowData["patient_id"].'"></p>
        <p><label for="nom">Nom et Prenom </label>:<input id="nom" name ="name" type="texte" value="'.$rowData["patient_name"].'"></p>
        <p><label for="date">date de naissance </label>:<input id="date" name ="date"  value="'.$rowData["patient_birthday"].' "></p>
        <p><label for="tel">telephone</label>:<input id="tel" name ="tel" type="tel" value="'.$rowData["patient_num"].'"> </p>
        <p><label for="asMaladie">numéro assurance maladie</label>:<input id="asMaladie" name ="assurance" type="text"  value="'.$rowData["patient_numAM"].'"> </p>
        <p><label for="nom">code patient</label>:<input id="nom" name ="code" type="number" value="'.$rowData["patient_code"].'"></p>
    </fieldset>';
    }
}catch(exception $e){}
    ?>
</body>
</html>