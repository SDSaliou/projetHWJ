<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hopital";
    $idp=$_POST["idp"];
    $datej=$_POST["devj"];
    $patient=$_POST["idpat"];
    $sall=$_POST["salle"];
    $pers=$_POST["idper"];
    

    // Connexion à la base de données
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $query = $conn->query('UPDATE  devoir SET devoir_jours="'.$datej.'",RV_patient_id="'.$patient.'",devoir_chambre_id="'.$sall.'" ,personnel_id="'.$pers.'" WHERE devoir_id='.$idp );
    header("Location:listedevoirdujour.php");
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