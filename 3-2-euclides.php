<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

function Euclides( $g1, $g2 )
{
    // Deze functie berekent de grootste gemene deler van 2 getallen
    while ( $g1 != $g2 )
    {
        if ( $g1 > $g2 ) $g1 -= $g2;
        else $g2 -= $g1;
    }
    return $g1;
}

$input1 = readline("Geef een getal aub: ");             //bv. 693
$input2 = readline("Geef nog een getal aub: ");     //bv. 252
$ggd = Euclides( $input1, $input2 );                        //bv. 63
printf("De grootste gemene deler van %s en %s is %s" , $input1, $input2, $ggd );