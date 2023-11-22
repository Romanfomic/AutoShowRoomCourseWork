<?php
require '../src/core.php';
redirectIfNotAuthorized();

$showSuccess = false;
$showError = false;
$errorMsg = '';
if (isset($_POST['registration'])) {
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userPass = $_POST['password'];
    $userPassConf = $_POST['password_confirmation'];
    $user = findUser($userEmail);

    if (empty($userName) || empty($userEmail) || empty($userPass) || empty($userPassConf)) {
        $showError = true;
        $errorMsg = 'Все поля обязательны для заполнения!';
    } elseif ($userPass !== $userPassConf) {
        $showError = true;
        $errorMsg = 'Подтверждение пароля не совпадает с паролем!';
    } elseif (strlen($userPass) < 6) {
        $showError = true;
        $errorMsg = 'Пароль должен быть не менее 6 символов!';
    } elseif ($user) {
        $showError = true;
        $errorMsg = "Данный пользователь уже существует!";
    } else {
        $showError = false;
        $showSuccess = true;
        $createdUser = [
            'isActive' => 0,
            'name' => $userName,
            'email' => $userEmail,
            'phone' => '',
            'password' => $userPass,
            'isEmailNotificationEnabled' => 0,
        ];
        createUser($createdUser);
    }
}

?>

    <?php includeTemplate('header.php', ['title' => 'Регистрация', 'mainTitle' => 'Рога и Сила - Главная страница']); ?>
            <?php if ($showError) {
                includeTemplate('messages/error_message.php', ['message' => $errorMsg]);
            } elseif ($showSuccess) {
                includeTemplate('messages/success_message.php', ['message' => 'Вы успешно зарегистрированы']);
            }
                ?>
            
            <form method="post">
                <div class="mt-8 max-w-md">
                    <div class="grid grid-cols-1 gap-6">
                        <div class="block">
                            <label for="fieldName" class="text-gray-700 font-bold">ФИО</label>
                            <input id="fieldName" name="name" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Иванов Иван Иваныч">
                        </div>
                        <div class="block">
                            <label for="fieldEmail" class="text-gray-700 font-bold">Email</label>
                            <input id="fieldEmail" name="email" type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="john@example.com">
                        </div>
                        <div class="block">
                            <label for="fieldPassword" class="text-gray-700 font-bold">Пароль</label>
                            <input id="fieldPassword" name="password" type="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="******">
                        </div>
                        <div class="block">
                            <label for="fieldPasswordConfirmation" class="text-gray-700 font-bold">Подтверждение пароля</label>
                            <input id="fieldPasswordConfirmation" name="password_confirmation" type="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="******">
                        </div>
                        <div class="block">
                            <button name="registration" type="submit" class="inline-block bg-orange hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                Регистрация
                            </button>
                            <a href="/login" class="inline-block hover:underline focus:outline-none font-bold py-2 px-4 rounded">
                                У меня уже есть аккаунт
                            </a>
                        </div>
                    </div>
                </div>
            </form>
    <?php includeTemplate('footer.php', []);?>
