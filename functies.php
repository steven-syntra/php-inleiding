<?php
function Print5Times( $tekst )      # $tekst = parameter
{
    print "$tekst\n";
    print "$tekst\n";
    print "$tekst\n";
    print "$tekst\n";
    print "$tekst\n";
}

//Print5Times( "dit is de tekst" );      # "dit is de tekst" is een argument

function OppervlakteRechthoek( $lengte, $breedte )
{
    return ($lengte * $breedte);
}

function VolumeBalk( $lengte, $breedte, $hoogte )
{
    $opp_grondvlak = OppervlakteRechthoek($lengte, $breedte);
    $volume = $opp_grondvlak * $hoogte;
    print "Het volume van uw balk is $volume";
}

VolumeBalk( 10, 5, 4);
