<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

#dit programma berekent in hoeveel stukken een aantal taarten gesneden moeten worden
#om alle deelnemers een stuk te geven

$aantal_taarten = 15;
$aantal_deelnemers = 90;

$aantal_stukken = $aantal_deelnemers / $aantal_taarten;

$bericht = "Je moet de taarten in %s stukken snijden.\n";
printf( $bericht, (int) $aantal_stukken);




