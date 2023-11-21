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
                        includeTemplate('authorizeMenu.php', [
                            'regField' => 'Регистрация',
                            'authField' => 'Авторизация',
                            'regHrefFielf' => '/register',
                            'authHrefFielf' => '/login',
                            'authImage' => 'M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z',
                            'regImage' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                        ]);
                    } else {
                        includeTemplate('authorizeMenu.php', [
                            'regField' => $userEmail,
                            'authField' => 'Выйти',
                            'regHrefFielf' => '#',
                            'authHrefFielf' => '?logout=yes',
                            'authImage' => 'M4,12a1,1,0,0,0,1,1h7.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L12.59,11H5A1,1,0,0,0,4,12ZM17,2H7A3,3,0,0,0,4,5V8A1,1,0,0,0,6,8V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2',
                            'regImage' => 'M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1,1,0,0,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1A10,10,0,0,0,15.71,12.71ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z',
                        ]);
                    }?>  
                </div>
            </div>
        </div>
        <?php includeTemplate('menu.php', ["menuArray" => $menuArray]); ?>  
    </header>
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8">
            <h1 class="text-black text-3xl font-bold mb-4"> <?=$title ?> </h1>
