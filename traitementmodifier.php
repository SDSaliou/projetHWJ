<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hopital";
    $idp=$_POST["idpatient"];
    $name=$_POST["name"];
    $tel=$_POST["tel"];
    $assurance=$_POST["assurance"];
    $code=$_POST["code"];
    

    // Connexion à la base de données
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $query = $conn->query('UPDATE  patients SET patient_name="'.$name.'",patient_num="'.$tel.'",patient_numAM="'.$assurance.'" ,patient_code="'.$code.'" WHERE patient_id='.$idp );
    header("Location:modifierpatient.php");
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