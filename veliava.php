<?php
$color1 = rand(0, 255);
$color2 = rand(0, 255);
$color3 = rand(0, 255);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class='spalva'style="background-color: rgb(<?php print $color1 . ', ' . $color2 . ', ' . $color3; ?>"> </div>
    <div class='spalva'style="background-color: rgb(<?php print $color3 . ', ' . $color2 . ', ' . $color1; ?>"> </div>
    <div class='spalva'style="background-color: rgb(<?php print $color2 . ', ' . $color1 . ', ' . $color3; ?>"> </div>


</body>
</html>