<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

function DeelbaarDoor( $getal, $deler )
{
    if ( $getal % $deler == 0 ) return true;
    else return false;
}

for ( $x=1; $x <= 20 ; $x++ )
{
    $randomnr = random_int(100,999);
    if ( DeelbaarDoor( $randomnr, 7) )
    {
        printf( "%s is deelbaar door %s\n", $randomnr, 7);
    }
    else
    {
        printf( "%s\n", $randomnr);
    }
}