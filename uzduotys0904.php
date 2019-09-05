<?php
$a = 8;
$b = 2; 
$c = 3; 
$d = 4; 
$e = 5;

$f = $a - $b;
$g = $a ** $b;
$i = sqrt($g);


print $a . '-' . $b.'<br>'; 
print $f .'<br>'; 
print $g .'<br>';
print $i .'<br>';
print "Today is " . date("Y/m/d") . "<br>";
 
$date=strtotime("+4 Months");
print date("Y-m-d h:i:sa", $date) . "<br>";


?>