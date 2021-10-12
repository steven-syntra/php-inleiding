<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

$stemmen =	[
    "NVA"=> 2455,
    "SP-A"=> 2856,
    "CD&V"=> 1501,
    "GROEN"=> 1744,
    "OPEN-VLD"=> 1988,
    "VLAAMSBELANG"=> 586,
    "PVDA"=> 697
];

#$totaal van de $stemmen maken
$totaal=0;
foreach( $stemmen  as $partij => $aantal )
{
    $totaal += $aantal;
}

printf("totaal aantal stemmen: %s \n" , $totaal);
print "\n";

#per partij het percentage berekenen en naam + percentage printen
$totprocent = 0; # controlevariabele $totaal van de percentages

foreach( $stemmen as $partij => $aantal )
{
    # berekeningen
    $float_procent = $aantal * 100 / $totaal ;
    $totprocent += $float_procent;

    # bewerkingen ($teksten formatteren)
    $string_procent = number_format($float_procent, 2); # percentage altijd met 2 decimalen
    $partij_left_aligned = LinksUitlijnen( $partij, 25); # partij links uitlijnen
    $procent_right_aligned = RechtsUitlijnen( $string_procent, 25); # percentage rechts uitlijnen

    #output
    printf("%s %s \n" , $partij_left_aligned, $procent_right_aligned);
}


print "\n";
printf("%s %s" , LinksUitlijnen("totaal van de percentages:", 40) , RechtsUitlijnen( number_format( $totprocent, 2),10));

function LinksUitlijnen( $tekst, $breedte )
{
    /**
     * Deze functie lijnt een opgegeven tekst links uit op de opgegeven
     * breedte ; de ruimte rechts van de tekst wordt opgevuld met spaties
     */
    # van de gewenste breedte de lengte van de tekst aftrekken
    $breedte = $breedte - strlen($tekst);

    # eerst de tekst, dan een aantal spaties printen
    $spaties = "";
    for ( $x=0; $x < $breedte; $x++)
    {
        $spaties .= " ";
    }
    return $tekst . $spaties ;
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
    $spaties = "";
    for ( $x=0; $x < $breedte; $x++)
    {
        $spaties .= " ";
    }
    return $spaties . $tekst ;
}
