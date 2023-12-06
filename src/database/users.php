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

    $sql = "SELECT Groupss.*
        FROM Groupss
        JOIN UserGroups ON Groupss.id = UserGroups.groupId
        WHERE UserGroups.userId = :id";

    $querry = $connection->prepare($sql);

    $querry->bindParam(':id', $id, PDO::PARAM_INT);

    $querry->execute();

    return $querry->fetchAll(PDO::FETCH_ASSOC) ?: [];
}

function createUser($user = [])
{
    $connection = connectToDB();
    $password = password_hash($user['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO `Users` 
            (`isActive`, `fullName`, `email`, `phone`, `password`, `isEmailNotificationEnabled`) 
            VALUES 
            (?, ?, ?, ?, ?, ?)";

    $querry = $connection->prepare($sql);
    $querry->execute([$user['isActive'], $user['name'], $user['email'], $user['phone'], $password, $user['isEmailNotificationEnabled']]);
}
