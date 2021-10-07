<?php
$n = 1;
$n = 77;

function MyFunction( $n )
{
    global $n;
    $n = 3;         //lokale variabele - $n local scope
    print "In de functie is \$n gelijk aan $n" . "\n";
}

MyFunction($n);

print "Buiten de functie is \$n gelijk aan $n" . "\n";