<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hopital";
    $jour=$_POST["date"];
    $cons=$_POST["Consultation"];
    $montant=$_POST["Montant"];
    $id=$_POST["id"];
    $inf=$_POST["idinf"];
    $med=$_POST["idmed"];
    

    // Connexion à la base de données
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $requet='INSERT INTO  admission VALUES (NULL,"'.$jour.'"," '.$id.'","'.$cons.'",'.$inf.',NULL,NULL,NULL,"'.$montant.'",NULL)';
    $query = $conn->query($requet);
    header("Location:Receptionniste.php");
   ?>