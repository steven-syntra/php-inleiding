<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

#dit programma berekent in hoeveel stukken een aantal taarten gesneden moeten worden
#om alle deelnemers een stuk te geven
$aantal_taarten = 15;
$aantal_deelnemers = 90;

$bericht0 = "Je hebt %s taarten voor %s deelnemers.\n";
$bericht1 = "Je moet %s taarten in %s stukken snijden.\n";
$bericht2 = "En %s taarten in %s stukken.\n";

# $t2 = het $aantal taarten met 1 stuk meer     91 => 1,  92 => 2, 93 => 3
$t2 = $aantal_deelnemers % $aantal_taarten;     //modulo geeft de rest van de deling

# de andere taarten ($t1) hebben 1 stuk minder
$t1 = $aantal_taarten - $t2;

# $aantal_stukken_1 = het $aantal 'grotere' stukken per taart
$aantal_stukken_1 = intdiv($aantal_deelnemers, $aantal_taarten);

# $aantal_stukken_2 = het $aantal 'kleinere' stukken per taart
$aantal_stukken_2 = $aantal_stukken_1 + 1;

printf( $bericht0, $aantal_taarten , $aantal_deelnemers );
printf( $bericht1, $t1 , $aantal_stukken_1 );      //(int) => conversie naar int

if ( $t2 != 0 )
{
    printf( $bericht2, $t2 , $aantal_stukken_2 );
}

