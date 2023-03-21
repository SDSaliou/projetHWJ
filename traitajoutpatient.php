<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hopital";
    $name=$_POST["name"];
    $birthday=$_POST["bdate"];
    $tel=$_POST["tel"];
    $assurance=$_POST["assurance"];
    $code=$_POST["code"];
    //$sympt=$_POST["sym"];
    //$diagn=["diag"];
    //$test=$_POST["test"];
    //$trait=$_POST["trai"];
    $inf=$_POST["f_id"];
    $med=$_POST["m_id"];
    $date=$_POST["date"];
    $cons=$_POST["Consultation"];
    $mon=$_POST["Montant"];

    // Connexion à la base de données
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $requet='INSERT INTO  patients VALUES (NULL,"'.$name.'","'.$birthday.'",'.$code.' ,"'.$assurance.'","'.$tel.'")';
    $query = $conn->query($requet);
    $requet='SELECT patient_id FROM patients ORDER BY patient_id DESC LIMIT 1';
    $query = $conn->query($requet);
    $rowData=$query->fetch_assoc();
    $idp=$rowData["patient_id"];
    $dos='INSERT INTO admission VALUES (NULL,"'.$date.'",'.$idp.',"'.$cons.'",'.$inf.',NULL,NULL,NULL,'.$mon.','.$med.',NULL)';
    $query = $conn->query($dos);
    header("Location:Receptionniste.php");

    /*$result=mysqli_query($conn, $query);
    if($result)
    {
        echo "MODIFIACTION REUSSIT";
        //mysqli_close($conn);
        header("Location:modifierpatient.php");
    }
    else
    {
        "'.$sympt.'","'.$diagn.'","'.$trait.'","'.$mon.'","'.$med.'","'.$test.'"
        //echo "Error updating record: " . mysqli_error($conn);
    }*/
   ?>