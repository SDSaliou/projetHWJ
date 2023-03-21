<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hopital";
    $id=$_POST["id"];
    $datee=$_POST["dateE"];
    $dates=$_POST["dateS"];
    $med=$_POST["idmed"];
    $salle=$_POST["salle"];
    

    // Connexion à la base de données
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $requet='INSERT INTO hospitalisation VALUES (NULL,'.$id.',"'.$datee.'","'.$dates.'",'.$med.','.$salle.')';
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