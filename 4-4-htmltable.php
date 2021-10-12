<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

$student =	[
    "voornaam"=> "Jan",
    "naam"=> "Janssens",
    "straat"=> "Oude baan",
    "huisnr"=> "22",
    "postcode"=> 2800,
    "gemeente"=> "Mechelen",
    "geboortedatum"=> "14/05/1991",
    "telefoon"=> "015 24 24 26",
    "e-mail"=> "jan.janssens@gmail.com"
];

# de functie oproepen voor de student array
StudentToTable( $student );

function StudentToTable( $student )
{
    //Deze functie vormt een array 'student' om naar een HTML tabel

    print "<h1>Student</h1>"; # hoofding
    print "<table>"; # start van de tabel

    # voor elk gegeven (naam, voornaam, ...) een rij (<tr>) toevoegen met 2 cellen (<td>)
    foreach( $student as $key => $value )
    {
        # de velden krijgen als eerste letter een hoofdletter (Naam, Voornaam, enz...)
        print "<tr><td>" . ucfirst($key) . "</td><td>" . $value . "</td></tr>";
    }

    print "</table>"; # afsluiten van de tabel
}

