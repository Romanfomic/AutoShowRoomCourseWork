<?php

function findUser(string $email): array
{
    $connection = connectToDB();

    $querry = $connection->prepare('SELECT * FROM `Users` WHERE `email` = :email LIMIT 1');
    $querry->bindParam(':email', $email);

    $querry->execute();
    return $querry->fetch(PDO::FETCH_ASSOC) ?: [];
}
