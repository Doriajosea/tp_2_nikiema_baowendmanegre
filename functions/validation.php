<?php
require_once("crudAddress.php");
//validation de street
function  streetIsValid( $street): array
{
    $result = [
        'isValid' => true,
        'msg' => ''
    ];
    echo '<br><br>';
    if (strlen($street) > 50) {
        $result = [
            'isValid' => false,
            'msg' => "<h3><center>ERROR</center></h3> ce numéro de rue :$street utilisé est trop long."
        ];
    }
    return $result;
}
//validation de ladresses: verifier si elle est deja dans la base de donnees 
function  addressIsValid($type, $zipcode): array
{
    $result = [
        'isValid' => true,
        'msg' => ''
    ];
    $addressInDB=getUserByTypeAndZipCode($type,$zipcode);

    if ($addressInDB) {
        $result = [
            'isValid' => false,
            'msg' => "<h3><center>ERROR</center></h3> cette adresse dont le type est $type et le code postale est $zipcode est deja utilisée ."
        ];
    }
    return $result;
}
//validation du zipcode
function zipCodeIsValid($zipcode): array
{
    $result = [
        'isValid' => true,
        'msg' => ''
    ];
    echo '<br><br>';
    if (strlen($zipcode) !=6 ) {
        $result = [
            'isValid' => false,
            'msg' => "<h3><center>ERROR</center></h3> le code postale utilisé:$zipcode contient plus ou moins de 6 caracteres."
        ];
    }
    return $result;
}

?>