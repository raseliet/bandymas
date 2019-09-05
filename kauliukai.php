<?php
$dices = [
   '1' => 'https://cdn2.iconfinder.com/data/icons/dice-roll/100/dice_1-512.png',
   '2' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Dice-2-b.svg/1024px-Dice-2-b.svg.png',
   '3' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Dice-3-b.svg/1024px-Dice-3-b.svg.png',
   '4' => 'https://cdn2.iconfinder.com/data/icons/dice-roll/100/dice_4-512.png',
   '5' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Dice-5-b.svg/557px-Dice-5-b.svg.png',
   '6' => 'https://cdn2.iconfinder.com/data/icons/dice-roll/100/dice_6-512.png',
];
$pc1 = rand(1, 6);
$pc2 = rand(1, 6);
$sumpc = $pc1 + $pc2;
$user1 = rand(1, 6);
$user2 = rand(1, 6);
$sumuser = $user1 + $user2;
//kaire virsus
if ($pc1 == 1) {
   $jpg1 = $dices['1'];
} elseif ($pc1 == 2) {
   $jpg1 = $dices['2'];
} elseif ($pc1 == 3) {
   $jpg1 = $dices['3'];
} elseif ($pc1 == 4) {
   $jpg1 = $dices['4'];
} elseif ($pc1 == 5) {
   $jpg1 = $dices['5'];
} else {
   $jpg1 = $dices['6'];
}
//kaire apacia
if ($pc2 == 1) {
   $jpg2 = $dices['1'];
} elseif ($pc2 == 2) {
   $jpg2 = $dices['2'];
} elseif ($pc2 == 3) {
   $jpg2 = $dices['3'];
} elseif ($pc2 == 4) {
   $jpg2 = $dices['4'];
} elseif ($pc2 == 5) {
   $jpg2 = $dices['5'];
} else {
   $jpg2 = $dices['6'];
}
//desine virsus
if ($user1 == 1) {
   $jpg3 = $dices['1'];
} elseif ($user1 == 2) {
   $jpg3 = $dices['2'];
} elseif ($user1 == 3) {
   $jpg3 = $dices['3'];
} elseif ($user1 == 4) {
   $jpg3 = $dices['4'];
} elseif ($user1 == 5) {
   $jpg3 = $dices['5'];
} else {
   $jpg3 = $dices['6'];
}
//desine apacia
if ($user2 == 1) {
   $jpg4 = $dices['1'];
} elseif ($user2 == 2) {
   $jpg4 = $dices['2'];
} elseif ($user2 == 3) {
   $jpg4 = $dices['3'];
} elseif ($user2 == 4) {
   $jpg4 = $dices['4'];
} elseif ($user2 == 5) {
   $jpg4 = $dices['5'];
} else {
   $jpg4 = $dices['6'];
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Dice</title>
   <style>
       body {
           display: flex;
           justify-content: center;
       }
       .player {
           background-color: grey;
           margin: 20px;
           padding: 20px;
           width: 30vw;
           height: 70vh;
           display: flex;
           align-items: center;
           flex-direction: column;
       }
       img {
           max-height: 20vh;
           max-width: 20vw;
       }
   </style>
</head>
<body>
<section class="player" id="pc">
   <img src='<?php print $jpg1; ?>' alt='dice1'>
   <img src='<?php print $jpg2; ?>' alt='dice2'>
   <h2><?php print $sumpc; ?></h2>
   <?php if ($sumpc > $sumuser): ?>
       <h1>LAIMEJOTE</h1>
   <?php endif; ?>
</section>
<section class="player" id="user">
   <img src='<?php print $jpg3; ?>' alt='dice1'>
   <img src='<?php print $jpg4; ?>' alt='dice2'>
   <h2><?php print $sumuser; ?></h2>
   <?php if ($sumpc < $sumuser): ?>
       <h1>LAIMEJOTE</h1>
   <?php endif; ?>
</section>
</body>
</html>