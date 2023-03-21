<html lang="en">
<head>
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
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Patients
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="listedespatients.php">Liste des patients</a></li>
                <li><a class="dropdown-item" href="Receptionniste.php">Ajout patients</a></li>
                <li><a class="dropdown-item" href="recherchepatient.php">Rechercher</a></li>
            </ul>
           </div> 
          <ul class="x">
            <a href="listedeshospitalisation.php">Hospitalisation </a>
              <a href="listedesrv.php">Rendez-vous</a>
              <a href="#"><?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "hopital";
                        $id=$_GET["idrec"];
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        $query = $conn->query('SELECT personnel_name from personnels WHERE personnel_id='.$id);
                        while ($rowData=$query->fetch_assoc()){
                        echo $rowData["personnel_name"];}
                        ?>
                        </a>           
              <a href="Accueil.php">Deconnecté </a>
          </ul>
    </header>

    <main classe ="row">
    <form method="post" id="first" action= "traitajoutpatient.php">
        <fieldset form="first" >
            <p><label for="today">date</label>:<input id="today" name ="date" type="date"></p>
            <p><label for="Consultation">Consultation</label>:<input id="Consultation" name="Consultation" type="radio" value="Normale">Normale
             <input id="Consultation" name="Consultation" type="radio" value="Urgence">Urgence</p>
             <p><label for="Montant">Montant</label>:<input id="Montant" name ="Montant" type="number" required> </p>
              Vous soutaitez Payer :
            </p>
            <label for="wave">Par wave</label> <input type="radio" name="paiement" value="wave" id="wave"/>    
            <label for="OM"></label>Par OrangeMoyen</label><input type="radio" name="paiement" value="OrangeMoyen" id="OM"/> 
            <label for="visa">Via visa</label> <input type="radio" name="paiement" value="visa" id="visa"/>
            <p><label for="medecin_id">medecin</label>:<input id="medecin_id" name ="m_id" type="number" ></p>
            <p><label for="infirmier_id">Infirmier</label>:<input id="infirmier_id" name ="f_id"  type="number"  ></p>
        </fieldset>
        <fieldset form="first">
          <legend>Information sur le patient</legend>  
            <p><label for="nom">Nom et Prenom </label>:<input id="nom" name ="name" type="texte" placeholder="Entrez le nom du patient..." required></p>
            <p><label for="date">date de naissance </label>:<input id="date" name ="bdate" type="date"></p>
            <p><label for="genre">Sexe</label>:<input id="genre" name="fsexe" type="radio" value="F">Femme
              <input id="genre"  name="fsexe" type="radio" value="H">Homme</p>
              <p><label for="code">code</label>:<input id="code" name ="code" type="number" required> </p>
       
            <select name="type">
              <option value="adulte">Adulte</option>
              <option value="enfant">Enfant</option>
            </select>
            <p><label for="tel">telephone</label>:<input id="tel" name ="tel" type="tel" required> </p>
            <p>Vous avez une assurance maladie ? :<input type="radio" name ="choix" >Non<input type="radio" name ="choix" >Oui</p>
            <p><label for="asMaladie">numéro assurance maladie</label>:<input id="asMaladie" name ="assurance" type="texte" > </p>
          </fieldset> 
        <input  type="submit" value="Enregistrer">
    </form>
  </main>
</body>
</html>