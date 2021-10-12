<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

function Gemiddelde( $array )
{
    $aantalc=count($array);
    $totaal=array_sum($array);
    $G = $totaal / $aantalc;
    return $G;
}

$lijst = [ 14, 5, 8, 9, 13, 18, 16, 25 ];
$G = Gemiddelde( $lijst ) ;
print( $G );