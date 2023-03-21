<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hopital";
    $sup=$_GET["id"];

    // Connexion à la base de données
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $delete = 'DELETE from devoir WHERE devoir_id='.$sup ;
    $query = $conn->query( $delete );
    header("Location:listedevoirdujour.php");
?>