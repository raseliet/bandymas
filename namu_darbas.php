<?php


$vardai = [
    'Tomas',
    'Dainius',
    'Giedrius',
    'Julius'
];


$pavardes = [
    0 =>'Tomauskas',
    1 =>'Dainiauskas',
    2 =>'Giedriauskas',
    3 =>'Julianus'
];

$amzius = [
    'dvidesimt' => 20,
    'trsidesimt' => 30,
    'keturiuasdesimt' => 40,
    'penkiasdesimt' => 50
];




//print $vardai[1] . ' ' . $pavardes[2] . ' ' . 'amzius' . ' ' . $amzius['penkiasdesimt'];


$zmones = [
    [
        'name' => 'Tomas',
        'surname' => 'Tomaitis',
        'age' => 33,
        'sex' => [
            'man',
            'woman'
        ]
    ],
    [
        'name' => 'Dainius',
        'surname' => 'Dainys',
        'age' => 13,
        'sex' => [
            'man',
            'woman'
        ]
    ],
    [
        'name' => 'Julius',
        'surname' => 'Juliauskas',
        'age' => 67,
        'sex' => [
            'man',
            'woman'
        ]
    ],
    [
        'name' => 'Giedrius',
        'surname' => 'Giedriauskas',
        'age' => 23,
        'sex' => [
            'man',
            'woman'
        ]
    ],
    [
        'name' => 'Kestis',
        'surname' => 'Gaizauskas',
        'age' => 43,
        'sex' => [
            'man',
            'woman'
        ]
    ],
];

//print 'Dainius Dainys 13';

//print $zmones[1]['name'] . ' ' . $zmones[1]['surname'] . ' ' . $zmones[1]['age']. ' ' . $zmones[1]['sex'][0] ;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
        <?php foreach($zmones[0] as $key =>$value):?>

        <th><?php print $key; ?></th>
<?php endforeach; ?>
    </tr>


    <tr>
    <?php foreach($zmones as $value) :?>  

<tr>
<?php foreach($value as $key) :?>

<td> <?php print $key; ?></td>
    <?php endforeach; ?>
    </tr>
    <?php endforeach; ?>
    
    </tr>
    </table>
</body>
</html>

