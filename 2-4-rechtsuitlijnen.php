<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

function RechtsUitlijnen( $tekst, $breedte )
{
    /**
     * Deze functie lijnt een opgegeven tekst rechts uit op de opgegeven
     * breedte ; de ruimte links van de tekst wordt opgevuld met spaties
     */
    # van de gewenste breedte de lengte van de tekst aftrekken
    $aantal_spaties = $breedte - strlen($tekst);

    # eerst een aantal spaties, en dan de tekst zelf printen
    //print strlen($tekst);
    for ( $x=0; $x < $aantal_spaties; $x++)
    {
        print " ";
    }
    print $tekst . "\n";
}

RechtsUitlijnen("banaan", 70);
RechtsUitlijnen("nog een banaan", 70);
RechtsUitlijnen("2.30 euro", 70);
RechtsUitlijnen("dit is een hele lange zin", 70);
RechtsUitlijnen("14.10 euro", 70);