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

function getMenu() :array
{
    $menuArray = [
        [
            'title' => 'Главная',
            'path' => '/',
            'sort' => 1,
            'class' => 'text-gray-600 hover:text-orange',
        ],
        [
            'title' => 'Раздел 1 с большим заголовком',
            'path' => '/inner1/',
            'sort' => 2,
            'class' => 'text-gray-600 hover:text-orange',
        ],
        [
            'title' => 'Раздел 2',
            'path' => '/inner2/',
            'sort' => 3,
            'class' => 'text-gray-600 hover:text-orange',
        ],
        [
            'title' => 'Раздел 3',
            'path' => '/inner3/',
            'sort' => 4,
            'class' => 'text-gray-600 hover:text-orange',
        ],
        [
            'title' => 'Каталог',
            'path' => '/catalog/',
            'sort' => 5,
            'class' => 'text-gray-600 hover:text-orange',
        ]
    ];

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
