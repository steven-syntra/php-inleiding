<?php
$antwoord_key = "";
$boodschappen = [];

while ( $antwoord_key <> "stop" )
{
    $antwoord_key = readline("Naam van de partij ");
    $antwoord_value = readline("Aantal stemmen ");
    if ( $antwoord_key <> "stop" ) $boodschappen[$antwoord_key] = $antwoord_value;
}

print_r($boodschappen);