<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

#i input
$kapitaal = readline("Wat is het kapitaal? ") ;                         //bv. 900
$procent = readline("Wat is de intrest in procenten? ");       //bv. 3
$looptijd = readline("Wat is de looptijd? ");                            //bv. 10

# output
# de kolomhoofdingen
print RechtsUitlijnen("Jaar", 10);
print RechtsUitlijnen("Kapitaal", 12);
print RechtsUitlijnen("Rente", 12);
print "\n";

# de cijfers
for ( $jaar=1; $jaar <= $looptijd; $jaar++ )
{
    $rente = round(($kapitaal * $procent / 100), 2);
    $rente_format = number_format( $rente, 2 );
    $kapitaal_format = number_format( $kapitaal, 2 );
    print RechtsUitlijnen($jaar, 10);
    print RechtsUitlijnen($kapitaal_format, 12);
    print RechtsUitlijnen($rente_format, 12);
    print "\n";
    $kapitaal += $rente;
}

function RechtsUitlijnen( $tekst, $breedte )
{
    /**
     * Deze functie lijnt een opgegeven tekst rechts uit op de opgegeven
     * breedte ; de ruimte links van de tekst wordt opgevuld met spaties
     */
    # van de gewenste breedte de lengte van de tekst aftrekken
    $breedte = $breedte - strlen($tekst);

    # eerst een aantal spaties, en dan de tekst zelf printen
    //print strlen($tekst);
    for ( $x=0; $x < $breedte; $x++)
    {
        print " ";
    }
    return $tekst . "";
}