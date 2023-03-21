<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hopital";
    $idp=$_POST["idp"];
    $name=$_POST["name"];
    $code=$_POST["code"];

    // Connexion à la base de données
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $delete = 'DELETE from personnels WHERE personnel_id='.$idp ;
    $query = $conn->query( $delete );
    header("Location:suppersonnel.php");
?>