<?php

//enkelvoudige array
$cars = [ "Volvo", "BMW", "Toyota" ];

$cars[0]="Mercedes";
$cars[]="Volkswagen";

sort($cars);
var_dump($cars);
/*
foreach ( $cars as $car )
{
    print "$car \n";
}
*/

/*
//associatieve array
$prijzen = [ "Volvo" => 2500,
                "BMW" => 3500,
                "Toyota" =>11000 ];

foreach ( $prijzen as $merk => $prijs )
{
    print "$merk: $prijs \n";
}

*/

/*
//associatieve meerdimensionale array
$prijzen = [ "Volvo" => [ 2002, 2500 ],
                    "BMW" => [ 1996, 3500 ],
                    "Toyota" =>[ 2012, 11000 ]
                  ];

foreach ( $prijzen as $merk => $data )
{
    //print "$merk: bouwjaar is $data[0], prijs is $data[1] \n";
}

print json_encode($prijzen);
*/

// geeft:
//  {"Volvo":[2002,2500],"BMW":[1996,3500],"Toyota":[2012,11000]}




/*
$prijzen = [ "Volvo",
                    "BMW" => [ 1996, 3500 ],
                    "Toyota" =>[ 2012, 11000 ]
                ];
foreach ( $prijzen as $merk => $data )
{
    if ( is_array($data) )
    {
        print "$merk: bouwjaar is $data[0], prijs is $data[1] \n";
    }
    else
    {
        var_dump($merk);
        var_dump($data);
    }
}
*/