<?php
require '../src/core.php';
?>

    <?php includeTemplate('header.php', ['title' => 'Регистрация', 'mainTitle' => 'Рога и Сила - Главная страница']); ?>

            <div class="my-4">
                <div class="px-4 py-3 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
                    <p>Поле email обязательно для заполнения</p>
                </div>
            </div>

            <div class="my-4">
                <div class="px-4 py-3 leading-normal text-green-700 bg-green-100 rounded-lg" role="alert">
                    <p>Вы успешно зарегистрированы</p>
                </div>
            </div>
            
            <form>
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
                            <button type="submit" class="inline-block bg-orange hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                Регистрация
                            </button>
                            <a href="login.html" class="inline-block hover:underline focus:outline-none font-bold py-2 px-4 rounded">
                                У меня уже есть аккаунт
                            </a>
                        </div>
                    </div>
                </div>
            </form>
    <?php includeTemplate('footer.php', []);?>
