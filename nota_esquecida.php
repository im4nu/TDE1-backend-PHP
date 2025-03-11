<?php
function calcV2($media, $avp1){
    $calc = 2 * $media - $avp1 ;
    return $calc;
}

echo "Digite a média: ";
$media = trim(fgets(STDIN));

echo "Digite sua nota da AVP1";
$avp1 = trim(fgets(STDIN));

$function = calcV2($media, $avp1)
echo "A sua nota da AVP2 foi: $function"
?>