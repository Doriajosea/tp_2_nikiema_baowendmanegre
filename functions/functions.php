<?php

function wordsLengthIsValid($wordToValid){

    $length = strlen($wordToValid);
    $reponses = [
        "valid" => true,
        "message" => ""
    ];


    //Pour la verification de la taille du mot de passe
    if ($length < 6) {
        $reponses = [
            "valid" => false,
            "message" => "Votre mot de passe doit etre plus long s'il vous plait"
        ];
    }
    elseif ($length > 10) {
        $reponses = [
            "valid" => false,
            "message" => "Votre mot de passe doit etre plus court s'il vous plait"
        ];
    }

return $reponses;
}



?>