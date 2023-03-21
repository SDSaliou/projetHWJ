<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hopital";
    $datej=$_POST["datej"];
    $patient=$_POST["id"];
    $sall=$_POST["salle"];
    $pers=$_POST["idperso"];
    

    // Connexion à la base de données
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $ajoutdev='INSERT INTO  devoir VALUES (NULL, "'.$datej.'",'.$patient.'","'.$sall.'" ,"'.$pers.'")';
    $query = $conn->query($ajoutdev);
    header("Location:ajoutdevoir.php");
   ?>