<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$array = [
    'alus' => [
        [
            'name' => 'svyturio extra',
            'price' => 3,
        ],
        [
            'name' => 'utenos',
            'price' => 2.3,
        ],
        [
            'name' => 'Kalnapilio',
            'price' => 3.2,
        ],
    ],
    'sampanas' => [
        [
            'name' => 'bosca',
            'price' => 5,
        ],
        [
            'name' => 'verdi',
            'price' => 5.5,
        ],
        [
            'name' => 'riesling',
            'price' => 8,
        ],
    ],
    'vynas' => [
        [
            'name' => 'Monikutes naktys',
            'price' => 2,
        ],
        [
            'name' => 'Bosco delmerlo',
            'price' => 18,
        ],
        [
            'name' => 'Vinetu',
            'price' => 12.5,
        ],
    ],
];
$vardas = 'Jonas';
$amzius = 2;
$pinigai = 14;
$norimaPirktiPreke = 'Vinetu';
if ($amzius >= 21) {
    foreach ($array as $gerimoMasyvas) {
        foreach ($gerimoMasyvas as $gerimas) {
            if ($norimaPirktiPreke == $gerimas['name'] && $pinigai >= $gerimas['price']) {
                print 'Jus nusipirkote ' . $gerimas['name'] . ' kuris kainavo ' . $gerimas['price'] . ' Eur.';
            }
            if ($norimaPirktiPreke == $gerimas['name'] && $pinigai < $gerimas['price']) {
                print 'Nepakanka jums pinigu isigyti sia preke';
            }
        }
    }
} else {
    print $vardas . ' sugrizk, kai paaugsi.';
}

?>