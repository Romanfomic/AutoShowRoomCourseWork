<?php

function findUser(string $email): array
{
    $connection = connectToDB();

    $querry = $connection->prepare('SELECT * FROM `Users` WHERE `email` = :email LIMIT 1');
    $querry->bindParam(':email', $email);

    $querry->execute();
    return $querry->fetch(PDO::FETCH_ASSOC) ?: [];
}

function findGroups(string $id): array
{
    $connection = connectToDB();

    $sql = "SELECT Groups.*
        FROM Groups
        JOIN UserGroups ON Groups.id = UserGroups.groupId
        WHERE UserGroups.userId = :id";

    $querry = $connection->prepare($sql);
    
    $querry->bindParam(':id', $id, PDO::PARAM_INT);

    $querry->execute();

    return $querry->fetchAll(PDO::FETCH_ASSOC) ?: [];
}
