<?php
require '../src/core.php';
$isAuthorized = isAuthorized();
$showSuccess = false;
$showError = false;
$userEmail = '';
if (isset($_COOKIE['email'])) {
    $userEmail = $_COOKIE['email'];
}
$userPassword = '';
$userName = '';

if ($isAuthorized) {
    $showSuccess = true;
}

if (isset($_POST['authorization']) && ! $isAuthorized) {
    require '../data/passwords.php';
    require '../data/users.php';
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];
    $usersCount = count($emails);
    if ($passwords[array_search($userEmail, $emails)] === $userPassword) {
        authorized(['email' => $userEmail]);
        $userName = "Пользователь";
        $isAuthorized = true;
        $showSuccess = true;
        $showError = false;
        setcookie(
            "email",
            $userEmail,
            time() + 3600 * 24 * 30,
            "/"
        );
    }
    if (! $isAuthorized) {
        $showError = true;
    }
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

    <title>Рога и Сила - Главная страница</title>
    <link href="/assets/favicon.ico" rel="shortcut icon" type="image/x-icon">
</head>
<body class="bg-white text-gray-600 font-sans leading-normal text-base tracking-normal flex min-h-screen flex-col">
    <?php includeTemplate('header.php', ['title' => 'Авторизация']); ?>

            <?php if ($showError) {
                includeTemplate('messages/error_message.php', ['message' => 'Неверный email или пароль']);
            } elseif ($showSuccess) {
                includeTemplate('messages/success_message.php', ['message' => 'Вы успешно авторизовались']);
            } if (! $isAuthorized) {?>
            <form method="post">
                <div class="mt-8 max-w-md">
                    <div class="grid grid-cols-1 gap-6">
                        <div class="block">
                            <label for="fieldEmail" class="text-gray-700 font-bold">Email</label>
                            <input id="fieldEmail" value="<?=$userEmail?>" name="email" type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="john@example.com">
                        </div>
                        <div class="block">
                            <label for="fieldPassword" class="text-gray-700 font-bold">Пароль</label>
                            <input id="fieldPassword" name="password" type="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="******">
                        </div>
                        <div class="block">
                            <button name="authorization" type="submit" class="inline-block bg-orange hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                Войти
                            </button>
                            <a href="register.html" class="inline-block hover:underline focus:outline-none font-bold py-2 px-4 rounded">
                                У меня нет аккаунта
                            </a>
                        </div>
                    </div>
                </div>
            </form>
            <?php }?>
    <?php includeTemplate('footer.php', []);?>
</div>

</body>
</html>