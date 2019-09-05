

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$phones = [
    'iPhone' => [
        'name' => 'iPhone SE',
        'price' => 600,
        'img' => 'https://media.wired.com/photos/5926ff707034dc5f91bed4cc/master/pass/iPhoneSE-ft.jpg',
    ],
    [
        'name' => 'iPhone 7s',
        'price' => 700,
        'img' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/refurb-iphone7plus-gold?wid=1144&hei=1144&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1516213492458',
    ],
    [
        'name' => 'iPhone X',
        'price' => 700,
        'img' => 'https://res.cloudinary.com/spectrumobile/image/fetch/e_trim/w_360,h_480,c_fit,f_auto,q_auto,fl_lossy/http%3A%2F%2Fres.cloudinary.com%2Fspectrumobile%2Fimage%2Fupload%2Fv1527810361%2FSpecturm%2520Mobile%2520Buy%2520Flow%2FApple%2FiPhone%2520X%2FMQA52LLA_HERO.png',
    ],
    'Samsung' => [
        'name' => 'Samsung Galaxy',
        'price' => 400,
        'img' => 'https://www.att.com/shopcms/media/att/2018/shop/360s/9100239/6767B_1.jpg',
    ],
    [
        'name' => 'Samsung Galaxy S',
        'price' => 300,
        'img' => 'https://assets.mspimages.in/c/tr:w-375,h-300,c-at_max/14750-43-1.jpg',
    ],
    [
        'name' => 'Samsung Galaxy X',
        'price' => 500,
        'img' => 'http://www.areamobile.de/img/00/02/29/17/91-samsung-galaxy-s9-plus-teaser-test-01.jpg',
    ],
];




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* body {
            height: 90vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #gallery {
            width: 90vw;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .card {
            width: 25vw;
            background-color: #ad9fa445;
            border-radius: 35px;
            padding: 10px;
            margin: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        img {
            max-width: 40%;
            max-height: 40%;
            border-radius: 10%;
        } */
    </style>
</head>
<body>
    <section id="gallery">
         <?php foreach ($phones as $key =>$brand): ?>
            <div class="card">
                <img src="<?php print $brand['img']?>" alt="">
                name
                price
            </div>
        <?php endforeach; ?>
    </section>
</body>
</html>