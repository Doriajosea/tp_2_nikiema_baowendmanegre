<?php
require_once('../config/connection.php');
require_once('../functions/validation.php');
require_once("../functions/crudAddress.php");
session_start();
for ($i = 1; $i <= $_SESSION["nombre"]; $i++) {
$newAddressData = [
    "street" => $_SESSION["street$i"],
    "street_nb" => $_SESSION["street_nb$i"],
    "type" => $_SESSION["type$i"],
    "city"=> $_SESSION["city$i"],
    "zipcode"=> $_SESSION["zipcode$i"],
];
//ajouter ladresse a la base donnees
createAddress($newAddressData);
}?>