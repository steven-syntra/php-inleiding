<?php
$tekst = "<h1>Belangrijk nieuws</h1>" .
                "<p>Minister van Volksgezondheid Frank Vandenbroucke (Vooruit) " .
                " wil ‘voluit inzetten’ op laagdrempelige psychologische groepssessies. " .
                "Tijdens een openingscollege aan de KU Leuven stelde " .
                "hij zijn aanpak voor het najaar voor.</p>";

print substr( str_replace("Volksgezondheid", "Defensie", $tekst), 5, 50) . "\n";        //eerste 50 tekens van de string nemen
print strlen($tekst) . "\n";        //hoe lang is het opgegeven stuk tekst
print strpos($tekst, ".");         //waar staat 'op' in de tekst?

if ( strpos($tekst, "<h1>") === false ) print "Ik vind geen heading in de tekst";
else print "Joehoe! Heading gevonden!!!";

