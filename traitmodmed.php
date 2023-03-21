<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hopital";
    $idp=$_POST["idp"];
    $name=$_POST["name"];
    $code=$_POST["code"];
    $hor=$_POST["horaire"];

    // Connexion à la base de données
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $query = $conn->query('UPDATE  personnels SET personnel_name="'.$name.'",personnel_code="'.$code.'",horaire="'.$hor.'" WHERE personnel_service_id=2 AND personnel_id='.$idp );
    header("Location:modifiermedecin.php");
?>