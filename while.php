<?php
$n = 1;

while ( $n <= 20 )
{
    print $n . " " . random_int(100, 999) . "\n";
    $n++;           //increment
}

    $d = ( 8 * 9 ) * ++$n;
    print "\$d is nu gelijk aan $d ----- ";

    $antwoord = readline("Wil je nu stoppen? ");
    if ( $antwoord == "ja" )
    {
        break;
    }
    if ( $antwoord == "ga verder" )
    {
        continue;
    }

    print "Dit staat op het einde van de lus.\n";
}


//$a = 5;
//$b = 10;
//
//$a += 4;    //$a verhogen met 4
//$b -= 5;    //$b verminderen met 5
//$a *= 6;
//$a /= 2;
