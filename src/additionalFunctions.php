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