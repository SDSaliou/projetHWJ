<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hopital";
    $name=$_POST["name"];
    $profil=$_POST["Service"];
    $code=$_POST["code"];
    $hor=$_POST["horaire"];

    // Connexion à la base de données
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $requet='INSERT INTO  personnels VALUES (NULL,"'.$profil.'","'.$name.'",'.$code.')';
    $query = $conn->query($requet);
    header("Location:admin.php");
    /*$result=mysqli_query($conn, $query);
    if($result)
    {
        echo "MODIFIACTION REUSSIT";
        //mysqli_close($conn);
        header("Location:modifierpatient.php");
    }
    else
    {
        //echo "Error updating record: " . mysqli_error($conn);
    }*/
   ?>