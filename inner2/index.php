<?php require '../src/core.php'; ?>

<!doctype html>
<html class="antialiased" lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/assets/css/form.min.css" rel="stylesheet">
    <link href="/assets/css/tailwind.css" rel="stylesheet">
    <link href="/assets/css/base.css" rel="stylesheet">

    <title>Рога и Сила - Главная страница</title>
    <link href="/assets/favicon.ico" rel="shortcut icon" type="image/x-icon">
</head>
<body class="bg-white text-gray-600 font-sans leading-normal text-base tracking-normal flex min-h-screen flex-col">
<div class="wrapper flex flex-1 flex-col bg-gray-100">
    <?php includeTemplate('header.php', ['title' => 'Раздел 2']); ?>
            
            <div class="space-y-4">
                <p>Ниже представлен пример отображения контента</p>

                <img src="/assets/pictures/car_cerato.png" alt="" title="" class="w-96">
                <p>Горная тундра, как бы это ни казалось парадоксальным, отражает льежский оружейник, в начале века джентльмены могли ехать в них, не снимая цилиндра. Здесь работали Карл Маркс и Владимир Ленин, но шенгенская виза многопланово поднимает уличный кустарничек, потому что именно здесь можно попасть из франкоязычной, валлонской части города во фламандскую. Королевство погранично. Эфемероид поднимает кит, но особой популярностью пользуются заведения подобного рода, сосредоточенные в районе Центральной площади и железнодорожного вокзала.</p>
            </div>
        </div>
    </main>
    <?php includeTemplate('footer.php', []);?>
</div>

</body>
</html>