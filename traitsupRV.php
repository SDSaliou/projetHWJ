<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hopital";
    $idp=$_POST["idp"];
    $name=$_POST["name"];
    $med=$_POST["med"];
    $date=$_post['date'];

    // Connexion à la base de données
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $delete = 'DELETE from rendezvous WHERE rv_id='.$idp ;
    $query = $conn->query( $delete );
    header("Location:suppressionRV.php");
?>