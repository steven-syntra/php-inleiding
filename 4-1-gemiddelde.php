<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

function Gemiddelde( $array )
{
    $aantalc=0;
    $totaal=0;

    foreach ( $array as $cijfer )
    {
        $totaal += $cijfer ;
        $aantalc += 1;
    }

    $G = $totaal / $aantalc;
    return $G;
}

$lijst = [ 14, 5, 8, 9, 13, 18, 16, 25 ];
$G = Gemiddelde( $lijst ) ;
print( $G );