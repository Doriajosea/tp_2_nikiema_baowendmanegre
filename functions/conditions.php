<?php
require_once("functions.php");
require_once("../adresse.php");

var_dump($_POST);

if($_POST) {
    $nombre = $_POST['fnombre'];
    $nom = $_POST['fnom'];
    $prenom = $_POST['fprenom'];
    $street = $_POST['fstreet'];
    $street_nb = $_POST['fstreet_nb'];
    $zipcode = $_POST['fzipcode'];

    if ($nombre<0) {
        echo "</br> Votre Votre formulaire doit etre superieur a 01. ";

    }
    elseif($nombre) {
        echo "</br> Votre prenom est vide. Veuillez le remplir s'il vous plait.";

    }

    elseif(empty($prenom)) {
        echo "</br> Votre prenom est vide. Veuillez le remplir s'il vous plait.";

    }
}

?>