<?php

function authorized($user = []): void
{
    $_SESSION['auth'] = true;
    $_SESSION['user'] = $user;
}

function isAuthorized(): bool
{
    return (bool) ($_SESSION['auth'] ?? false);
}

function logout(): void
{
    $_SESSION['auth'] = false;
    $_SESSION['user'] = [];
}

function redirectIfAuthorized(string $location = '/'): void
{
    if (! isAuthorized()) {
        header('Location: ' . $location);
        exit();
    }
}

function currentUser(): array
{
    return $_SESSION['user'] ?? [];
}
