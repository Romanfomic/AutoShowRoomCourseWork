<!doctype html>
<html class="antialiased" lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="assets/css/form.min.css" rel="stylesheet">
    <link href="assets/css/tailwind.css" rel="stylesheet">
    <link href="assets/css/base.css" rel="stylesheet">

    <title>Рога и Сила - Главная страница</title>
    <link href="assets/favicon.ico" rel="shortcut icon" type="image/x-icon">
</head>
<body class="bg-white text-gray-600 font-sans leading-normal text-base tracking-normal flex min-h-screen flex-col">
<div class="wrapper flex flex-1 flex-col bg-gray-100">
    <header class="bg-white">
        <div class="border-b">
            <div class="container mx-auto block overflow-hidden px-4 sm:px-6 sm:flex sm:justify-between sm:items-center py-4 space-y-4 sm:space-y-0">
                <div class="flex justify-center">
                    <a href="/" class="inline-block sm:inline hover:opacity-75">
                        <img src="assets/images/logo.png" width="222" height="30" alt="">
                    </a>
                </div>
                <div>
                    <ul class="flex justify-center sm:justify-end items-center space-x-8 text-sm">
                        <li>
                            <a class="text-gray-500 hover:text-orange" href="register.html">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block text-orange h-4 w-4" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                Регистрация
                            </a>
                        </li>
                        <li>
                            <a class="text-gray-500 hover:text-orange" href="login">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block text-orange h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                </svg>
                                Авторизация
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="border-b">
            <div class="container mx-auto overflow-hidden px-4 sm:px-6">
                <section class="bg-white py-4">
                    <ul class="list-inside bullet-list-item flex flex-wrap justify-between -mx-5 -my-2">
                        <li class="px-5 py-2"><a class="text-gray-600 hover:text-orange" href="/">Главная</a></li>
                        <li class="px-5 py-2"><a class="text-orange cursor-default"      href="inner.html">Раздел 1</a></li>
                        <li class="px-5 py-2"><a class="text-gray-600 hover:text-orange" href="inner.html">Раздел 2</a></li>
                        <li class="px-5 py-2"><a class="text-gray-600 hover:text-orange" href="inner.html">Раздел 3</a></li>
                        <li class="px-5 py-2"><a class="text-gray-600 hover:text-orange" href="catalog.html">Каталог</a></li>
                    </ul>
                </section>
            </div>
        </div>
    </header>
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8">
            <h1 class="text-black text-3xl font-bold mb-4">Главная страница</h1>
            
            <div class="space-y-4">
                <p>Ниже представлен пример отображения контента</p>

                <table class="border border-collapse">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold text-center">Страница</th>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold text-center">Верстка страницы</th>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold text-center">Описание страницы</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">Личный кабинет</td>
                            <td class="border px-4 py-2"><a href="account.html" class="text-gray-600 hover:text-orange">account.html</a></td>
                            <td class="border px-4 py-2">Страница профиля авторизованного пользователя</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Каталог моделей</td>
                            <td class="border px-4 py-2"><a href="catalog.html" class="text-gray-600 hover:text-orange">catalog.html</a></td>
                            <td class="border px-4 py-2">Отображается каталог моделей, доступна только авторизованному пользователю</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Gui для веб-форм</td>
                            <td class="border px-4 py-2"><a href="form.html" class="text-gray-600 hover:text-orange">form.html</a></td>
                            <td class="border px-4 py-2">Страница с версткой элементов формы (вспомогательная страница)</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Главная страница</td>
                            <td class="border px-4 py-2"><a href="/" class="text-gray-600 hover:text-orange">index.php</a></td>
                            <td class="border px-4 py-2">Главная страница</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Вложенная страница</td>
                            <td class="border px-4 py-2"><a href="inner.html" class="text-gray-600 hover:text-orange">inner.html</a></td>
                            <td class="border px-4 py-2">Пример отображения контента любой вложенной страницы</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Форма авторизации</td>
                            <td class="border px-4 py-2"><a href="login" class="text-gray-600 hover:text-orange">login.html</a></td>
                            <td class="border px-4 py-2">Страница с формой авторизации</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Страница регистрации</td>
                            <td class="border px-4 py-2"><a href="register.html" class="text-gray-600 hover:text-orange">register.html</a></td>
                            <td class="border px-4 py-2">Страница с формой регистрации</td>
                        </tr>
                    </tbody>
                </table>
                <p>Крокодиловая ферма Самут Пракан - самая большая в мире, однако коневодство недоступно берёт кристаллический фундамент, несмотря на то, что все здесь выстроено в оригинальном славянско-турецком стиле. Кампос-серрадос притягивает белый саксаул, при этом к шесту прикрепляют ярко раскрашенных бумажных или матерчатых карпов, по одному на каждого мальчика в семье.</p>
            </div>
        </div>
    </main>
    <footer class="border-t bg-white">
        <div class="container mx-auto overflow-hidden px-4 sm:px-6">
            <div class="space-y-4 sm:space-y-0 sm:flex sm:justify-between items-center py-6 px-2 sm:px-0">
                <div class="copy pr-8">© 2021 Рога &amp; Сила. Сайт для изучения php</div>
                <div class="text-right">
                    <a href="https://www.qsoft.ru" target="_blank" class="inline-block">Сделано в <img class="ml-2 inline-block" src="assets/images/qsoft.png" width="59" height="11" alt=""/></a>
                </div>
            </div>
        </div>
    </footer>
</div>

</body>
</html>