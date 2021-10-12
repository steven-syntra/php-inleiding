<?php
$lijst = [ "jan", "piet", "lies", "els" ];

foreach ( $lijst as $naam )
{
    print $naam . "\n";
}

print $lijst[0] . "\n" ;
print $lijst[3] . "\n" ;

$lijst[4] = "annemie";

$lijst = [];

$lijst = [ "jan" => 38, "piet" => 27, "lies" => 41, "els" => 18 ];

foreach( $lijst as $naam => $leeftijd )
{
    print "$naam is $leeftijd jaar oud\n";
}

print $lijst["jan"] . "\n" ;
print $lijst["piet"] . "\n" ;

$lijst["lies"] = 29;

#	Dit is commentaar
//	Dit is commentaar
/*	Dit is commentaar		*/
$x=2;
    $y=9;
$c = $x + $y + 6 + (int)3.99;