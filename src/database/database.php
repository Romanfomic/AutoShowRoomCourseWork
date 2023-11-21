<?php

function connectToDB(): PDO
{
    static $connection = null;

    if ($connection !== null) {
        return $connection;
    }

    $config = [
        'hostname' => 'newgrade-crt',
        'username' => 'test',
        'password' => 'test',
        'database' => 'roman_f_qschool_test',
    ];

    $connection = new PDO(
        "mysql:host={$config['hostname']};dbname={$config['database']}",
        $config['username'],
        $config['password'],
    );
    return $connection;
}
