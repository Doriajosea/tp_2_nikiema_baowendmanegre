<?php
session_start();
var_dump($_SESSION["nombre"]);

for ($i = 1; $i <= $_SESSION["nombre"]; $i++) {
    echo"<h2><center>ADRESSE $i</h2>";
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
};
?>