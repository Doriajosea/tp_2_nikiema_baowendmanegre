<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Adresse</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
    <?php
require_once('../config/connection.php');
require_once('../functions/validation.php');
require_once("../functions/crudAddress.php");
session_start();
var_dump($_SESSION["nombre"]);

for ($i = 1; $i <= $_SESSION["nombre"]; $i++) {
    $_SESSION["street_nb$i"] = $_POST["street_nb$i"];
    $_SESSION["street$i"] = $_POST["street$i"];
    $_SESSION["ville$i"] = $_POST["ville$i"];
    $_SESSION["zipcode$i"] = $_POST["zipcode$i"];
    $_SESSION["type$i"] = $_POST["type$i"];
    $streetIsValid=streetIsValid($_POST["street$i"]);
    $zipCodeIsValid =zipCodeIsValid($_POST["zipcode$i"]);
    $addressIsValid=addressIsValid( $_POST["type$i"],$_POST["zipcode$i"]);
    if ($streetIsValid["isValid"] &&$zipCodeIsValid["isValid"] &&$addressIsValid["isValid"]){
    echo"<h2><center> ADRESSE $i</h2>";
    echo"<br><br>";
     echo "street $i :".$_POST["street$i"];
     echo"<br><br>";
     echo "street_nb $i :".$_POST["street_nb$i"];
     echo"<br><br>";
     echo "type $i :".$_POST["type$i"];  
     echo"<br><br>";
     echo "ville $i :".$_POST["ville$i"];
     echo"<br><br>";
     echo "zipcode $i :".$_POST["zipcode$i"];
     echo"<br><br><br><br>";
    }else{
        echo" <h1><center>ADRESSE $i PAS VALIDE</h1></center><br><BR>";
        echo $streetIsValid["msg"];
        echo $zipCodeIsValid["msg"];
        echo $addressIsValid["msg"];;
    }

};
if ($streetIsValid["isValid"] &&$zipCodeIsValid["isValid"] &&$addressIsValid["isValid"]) {
    //demander a lutilisateur de verifier ses adresses
echo "Veuillez CONFIRMER si ces informations sont correctes ou MODIFIER si celles ci sont incorrect ";
?>

<center>
<a href='addAddress.php'>
<input type='submit' id='confirmer' name='confirmer' value='CONFIRMER'>
</a>

<a href='../forms/form2.php'>
<input type='submit' id='modifier' name='modifier' value='MODIFIER'>
</a>
</center>

<?php
;}
?>

</body>

</html>