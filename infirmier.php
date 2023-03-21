<html lang="'fr">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="infirmier.css">
</head>
<body>
    <header class="entete">
        <img class="imgx" mat-card-image src= "assets/logo.jpg" width="150" >
        <div class="logo"> <span ></div> 
        <ul class ="x">
        <a href=<?php $idp=$_GET["idinf"]; echo "mespatients.php?id=".$idp?>> Patients </a>
            <a href=<?php $idp=$_GET["idinf"]; echo "mesdevoirs.php?id=".$idp?>>Devoir du jour </a>
            <a href="#"><?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "hopital";
                        $id=$_GET["idinf"];
                        $conn = mysqli_connect($servername, $username, $password, $dbname);
                        $query = $conn->query('SELECT personnel_name from personnels WHERE personnel_id='.$id);
                        while ($rowData=$query->fetch_assoc()){
                        echo $rowData["personnel_name"];}
                        ?>
                        </a>
            <a class="qui"  href="Accueil.php">Deconnecter</a>
        </ul>
    </header>
    <form method="post" id="firt" action="traitajouadmission.php">
    <fieldset form="second">
        <legend>Consultation</legend>
        <p><label for="id">id patient</label>:<input id="patient_id" type="number" name ="pid"></p>
        <p> 
            <label for="note">Symptomes:</label>
            <textarea name="symt" id="note" cols="40" rows="4"></textarea>
        </p> 
        
        <input type="submit" value="enregistrer">
    </fieldset>
</form>
    
    </form>
    </body>
    </html>