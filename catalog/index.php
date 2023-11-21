<?php
require '../src/core.php';
$carArray = getCars();
redirectIfAuthorized();

includeTemplate('header.php', ['title' => 'Каталог', 'mainTitle' => 'Рога и Сила - Главная страница']);
includeTemplate('cars_catalog.php', ["carArray" => $carArray,]);
includeTemplate('footer.php', []);
