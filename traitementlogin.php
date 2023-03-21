<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hopital";
// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);

$idsaisi=$_POST["identité"];
$pdmsaisi=$_POST["password"];
$profilselect=$_POST["profil"];
// Vérification de la connexion
if (!$conn) {
  die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}
else{
  $query = $conn->query('SELECT * FROM personnels');
    $results = array();
   
    while($rowData=$query->fetch_assoc()){
      //  $results[] = $rowData;
      //echo $rowData["personnel_name"];
      $test1=$rowData["personnel_id"]==$idsaisi;
      $test2=$rowData["personnel_code"]==$pdmsaisi;
      $test3=$rowData["personnel_service_id"]==$profilselect;
      if ($test1 & $test2 & $test3){
        echo "authentification reussie";
        //header("Location:Receptionniste.php");
        if ($profilselect=="1"){
            header("Location:admin.php?idad=".$idsaisi);
        } elseif ($profilselect=="2"){
            header("Location:medecin.php?idmed=".$idsaisi);
        }elseif($profilselect=="3"){
            header("Location:infirmier.php?idinf=".$idsaisi);
        }elseif($profilselect=="4"){
            header("Location:Receptionniste.php?idrec=".$idsaisi);
        }elseif($profilselect=="7"){
            header("Location:comptable.php?idcom=".$idsaisi);
        }
        break;
      /*}else($test1){
        echo "id ou code incorrecte";*/
      }
    
    }

   // echo json_encode($results);
   //echo $idsaisi." ".$pdmsaisi." ".$profilselect;
}
//echo "Connexion à la base de données réussie !"; 
?>