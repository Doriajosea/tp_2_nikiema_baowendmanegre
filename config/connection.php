<?php
require_once ('functions/functions.php');
require_once("adresse.php");

//require_once "functions/crud.php";
$server = 'localhost';
$userName = "root";
$pwd = "";
$db = "ecom1_tp2"; 

$conn = mysqli_connect($server, $userName, $pwd, $db);
if ($conn) {
    echo "Connected to the $db database successfully";
    global $conn;
}
else {
    echo "Error : Not connected to the $db database";
}

echo "<h2>Adresses saisies:</h2>";

for ($i = 1; $i <= $nombre; $i++) {
    echo "<p><strong>Adresse $i:</strong><br>
          Rue: {$_POST['street_'.$i]}<br>
          Numéro: {$_POST['street_nb_'.$i]}<br>
          Type: {$_POST['type_'.$i]}<br>
          Ville: {$_POST['city_'.$i]}<br>
          Code postal: {$_POST['zipcode_'.$i]}</p>";
}
?>

