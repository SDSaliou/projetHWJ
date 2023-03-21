


<html lang="en">
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
        <ul class ="x">
            <a href=<?php $idp=$_GET["idmed"]; echo "mespatients.php?id=".$idp?>>MesPatients </a>
            <a href=<?php $idp=$_GET["idmed"]; echo "mesdevoirs.php?id=".$idp?>>Devoir du jour </a>
            <a href="#"><?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "hopital";
                        $id=$_GET["idmed"];
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
            <textarea name="sym" id="note" cols="40" rows="4"></textarea>
        </p> 
        <p> 
            <label for="note">Diagnostic :</label>
            <textarea name="diag" id="note" cols="40" rows="4"></textarea>
        </p> 
       <p> test à faire:<input list="test" name="test">
        <datalist  id="test">
            <option value="">
            <option value="">
        </datalist></p>
        <p>medicaments:<input list="medoc">
            <datalist  id="medoc">
                <option value="">
                <option value="">
            </datalist></p>
        <p> 
            <label for="note">traitement:</label>
            <textarea name="trai" id="note" cols="40" rows="4"></textarea>
        </p> 
        <input formmethod="post" type="submit" value="Enregistrer">
    </fieldset>
</form>
    <form method="post" id="second" action="traitRVajout.php">
        <fieldset form="second">
            <legend>Ajout rendez-vous</legend>
            <p><label for="patient_id">patient</label>:<input id="patient_id" name ="p_id"  placeholder="id du patient..." type="number"  required></p>
            <p><label for="medecin_id">medecin</label>:<input id="medecin_id" name ="m_id" placeholder="votre id..." type="number"  required></p>
            <p><label for="date">rv_date </label>:<input id="date" name ="date" type="date"></p>
            <input  type="submit" value="Ajouter">
        </fieldset>
    </form>
</body>
</html>

