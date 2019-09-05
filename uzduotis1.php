<?php

$number = rand(0, 5);
$text = ' ';



if ($number % 2 == 0 && $number !== 0) {
    $text = 'skaicius dalinasi is dvieju be liekanos';
    $numb = 1;
}

if ($number % 5 == 0 && $number !== 0) {
    $text = 'skaicius dalinasi is penkiu be liekanos';
    $numb = 2;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="color-<?php print $numb ?>"><?php print $number . $text; ?></h1>
</body>
</html>