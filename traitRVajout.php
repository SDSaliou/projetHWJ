<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hopital";
    $id=$_POST["p_id"];
    $med=$_POST["m_id"];
    $daterv=$_POST["date"];
    

    // Connexion à la base de données
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $requet='INSERT INTO  rendezvous VALUES (NULL,"'.$id.'","'.$med.'","'.$daterv.'")';
    $query = $conn->query($requet);
    header("Location:medecin.php");
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