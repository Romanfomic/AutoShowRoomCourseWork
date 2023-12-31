<?php

function cutString(string $line, int $length = 12, string $appends = '...'): string
{
    if (mb_strlen($line) > $length) {
        $line = mb_substr($line, 0, $length) . $appends;
    }
    return $line;
}

function arraySort(array $array, string $key = 'sort', int $sort = SORT_ASC): array
{
    usort($array, function ($a, $b) use ($key, $sort) {
        if ($sort == SORT_ASC) {
            return $a[$key] <=> $b[$key];
        } else {
            return $b[$key] <=> $a[$key];
        }
    });
    return $array;
}

function getMenu(bool $isAuthorize) :array
{
    $menuArray = [
        [
            'title' => 'Главная',
            'path' => '/',
            'sort' => 1,
            'class' => 'text-gray-600 hover:text-orange',
        ],
        [
            'title' => 'О нас',
            'path' => '/inner1/',
            'sort' => 2,
            'class' => 'text-gray-600 hover:text-orange',
        ],
        [
            'title' => 'Контакты',
            'path' => '/inner2/',
            'sort' => 3,
            'class' => 'text-gray-600 hover:text-orange',
        ]
    ];
    if ($isAuthorize) {
        $menuItem = [
            'title' => 'Каталог',
            'path' => '/catalog/',
            'sort' => 5,
            'class' => 'text-gray-600 hover:text-orange',
        ];
        array_push($menuArray, $menuItem);
    }

    return $menuArray;
}

function isCurrentPage($url)
{
    $currentPage = $_SERVER['REQUEST_URI'];

    $parsedCurrentPage = parse_url($currentPage, PHP_URL_PATH);
    $parsedUrl = parse_url($url, PHP_URL_PATH);

    if ($parsedCurrentPage === $parsedUrl) {
        return true;
    }

    return false;
}
