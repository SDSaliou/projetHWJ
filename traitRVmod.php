<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hopital";
    $idp=$_POST["idp"];
    $name=$_POST["name"];
    $code=$_POST["med"];
    $code=$_post['date'];
    
    // Connexion à la base de données
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $query = $conn->query('UPDATE  rendezvous SET rv_patient_id="'.$name.'",rv_personnel_id="'.$med.'",rv_date="'.$date.'" WHERE rv_id='.$idp );
    header("Location:modifierRV.php");
?>