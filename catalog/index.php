<?php
require '../src/core.php';
$carArray = getCars();
?>

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
    <?php
        includeTemplate('header.php', ['title' => 'Каталог']);
        includeTemplate('cars_catalog.php', ["carArray" => $carArray,]);
        includeTemplate('footer.php', []);
    ?>
</div>

</body>
</html>