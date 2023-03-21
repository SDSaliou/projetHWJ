<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hopital";
$sympt=$_POST["sym"];
$diagn=["diag"];
$test=$_POST["test"];
$trait=$_POST["trai"];
$pat=$_POST["pid"];
$symp=$_POST["symt"];

$conn = mysqli_connect($servername, $username, $password, $dbname);
$query = $conn->query('UPDATE  admission SET diagnostic="'.$diagn.'",traitement="'.$trait.'" ,test="'.$test.'" WHERE patient_id='.$pat );
header("Location:medecin.php?id=");
$query = $conn->query('UPDATE  admission SET symptomes="'.$symp.'", WHERE patient_id='.$pat );
header("Location:infirmier.php?id=");
?>