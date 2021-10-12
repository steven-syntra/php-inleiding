<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

$rek=[
    'BE75832844265251',
    'BE05352906338775',
    'BE78793503484086',
    'BE02930902902740',
    'BE54679368522400',
    'BE79481522145939',
    'BE45238582867689',
    'BE90351463032632',
    'BE85594736411006',
    'BE43534698638801',
    'BE39862582066154',
    'BE96936741435905',
    'BE06120041275522',
    'BE42102532381041',
    'BE27643075640273',
    'BE44150090238545',
    'BE05501206942175',
    'BE38008704680572',
    'BE19295595075512',
    'BE18319809423665'
];

foreach ( $rek as $rekening )
{
    $antwoord = IsGeldigBankNr( $rekening );
    if ( ! $antwoord )
    {
        printf( "Bankrekening %s is FOUT HOOR !!! \n" , $rekening );
    }
}

function IsGeldigBankNr( $nr )
{
    $check = substr( $nr, 14, 2 );
    $midden = substr( $nr, 4, 10 );
    $ch2 = $midden % 97;

    //een checkdigit gelijk aan 00 mag niet, dat wordt 97
    if ( $ch2 == 0 ) $ch2 = 97;

    if ( $check == $ch2 ) return true;

    return false;
}


