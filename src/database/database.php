<?php

function connectToDB(): PDO
{
    static $connection = null;

    if ($connection !== null) {
        return $connection;
    }

    $config = [
        'hostname' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'rbd_project',
    ];

    $connection = new PDO(
        "mysql:host={$config['hostname']};dbname={$config['database']}",
        $config['username'],
        $config['password']
    );
    return $connection;
}
