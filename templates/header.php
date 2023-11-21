<?php
$isAuthorized = isAuthorized();
$menuArray = arraySort(getMenu($isAuthorized));
foreach ($menuArray as &$menuItem) {
    $menuItem['title'] = cutString($menuItem['title']);
    $menuItem['class'] = isCurrentPage($menuItem['path']) ? 'text-orange cursor-default' : 'text-gray-600 hover:text-orange';
}
$userEmail = "";
if (isAuthorized()) {
    $userEmail = $_COOKIE['email'];
    setcookie(
        "email",
        $userEmail,
        time() + 3600 * 24 * 30,
        "/"
    );
}
?>

<!doctype html>
<html class="antialiased" lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/assets/css/form.min.css" rel="stylesheet">
    <link href="/assets/css/tailwind.css" rel="stylesheet">
    <link href="/assets/css/base.css" rel="stylesheet">

    <title><?=$mainTite?></title>
    <link href="/assets/favicon.ico" rel="shortcut icon" type="image/x-icon">
</head>
<body class="bg-white text-gray-600 font-sans leading-normal text-base tracking-normal flex min-h-screen flex-col">
<div class="wrapper flex flex-1 flex-col bg-gray-100">
    <header class="bg-white">
        <div class="border-b">
            <div class="container mx-auto block overflow-hidden px-4 sm:px-6 sm:flex sm:justify-between sm:items-center py-4 space-y-4 sm:space-y-0">
                <div class="flex justify-center">
                    <a href="/" class="inline-block sm:inline hover:opacity-75">
                        <img src="/assets/images/logo.png" width="222" height="30" alt="">
                    </a>
                </div>
                <div>
                    <?php if (! $isAuthorized) {
                        includeTemplate('authorizeMenu.php', []);
                    } else {
                        includeTemplate('userMenu.php', [ 'userField' => $userEmail ]);
                    }?>  
                </div>
            </div>
        </div>
        <?php includeTemplate('menu.php', ["menuArray" => $menuArray]); ?>  
    </header>
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8">
            <h1 class="text-black text-3xl font-bold mb-4"> <?=$title ?> </h1>
