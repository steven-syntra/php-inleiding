<?php
//$array1 = array("peer", "banaan", "citroen");
//$array2 = array("kiwi", "appel", "ananas", "mango");
//$result = array_merge($array1, $array2);
//
//print_r(array_flip($result));

$student1 = [
    "Voornaam" => "Steven",
    "Leeftijd" => "24",
    "Straat" => "Prins Karellei",
    "Schoenmaat" => 46,
    ];

$student1["Lengte"] = 185;
$student1["IQ"] = 184;

$student2 = [
    "Voornaam" => "Marcos",
    "Leeftijd" => "32",
    "Straat" => "Kerkstraat",
    "Schoenmaat" => 43,
];

$student2["Lengte"] = 172;
$student2["IQ"] = 150;

$studenten = [ $student1, $student2 ];

var_dump($studenten);
print "In de array studenten zitten " . count($studenten) . " studenten";

