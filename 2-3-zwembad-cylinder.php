<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

function oppervlakte( $straal )
{
    $opp = round($straal ** 2 * pi(), 2);
    return $opp;
}

function BerekenInhoudCylinder( $hoogte, $diameter )
{
    $s1 = $diameter / 2;         # we krijgen de diameter, niet de straal, dus delen door 2
    $mijn_oppervlakte = oppervlakte($s1);
    $volume = (int)( $mijn_oppervlakte * $hoogte * 1000 ) ; # volume berekenen en omzetten naar liter
    printf( "De inhoud van het zwembad met hoogte %s en diameter %s is %s liter.\n", $hoogte, $diameter, $volume );
}

BerekenInhoudCylinder( $hoogte = 0.5, $diameter = 3 );
BerekenInhoudCylinder( $hoogte = 0.6, $diameter = 4 );
BerekenInhoudCylinder( $hoogte = 0.8, $diameter = 5.5 );    # benoemde argumenten maken de code duidelijker
