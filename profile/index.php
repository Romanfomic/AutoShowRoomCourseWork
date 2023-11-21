<?php
require '../src/core.php';
redirectIfAuthorized();
if (isset($_COOKIE['email'])) {
    $userEmail = $_COOKIE['email'];
    $user = findUser($userEmail);
    $userGroups = findGroups($user['id']);
}
?>

<?php includeTemplate('header.php', ['title' => 'Профиль', 'mainTitle' => 'Рога и Сила - Главная страница']); ?>

<div class="bg-white w-full border border-gray-100 rounded overflow-hidden shadow-lg hover:shadow-2xl pt-4">
    <div class="px-6 py-4">
        <div class="text-black font-bold text-xl mb-2"><a class="hover:text-orange" href="#"><?=$user['fullName']?></a></div>
        <p class="text-grey-darker text-base">
            Активированность: <?= $user['isActive'] == 1 ? 'имеется' : 'не имеется' ?>
        </p>
        <br>
        <p class="text-grey-darker text-base">Почта: <?=$user['email']?></p>
        <br>
        <p class="text-grey-darker text-base">Телефон: <?=$user['phone']?></p>
        <br>
        <p class="text-grey-darker text-base">Пароль: <?=$user['password']?></p>
        <br>
        <p class="text-grey-darker text-base">
            Уведомления на почту: <?= $user['isEmailNotificationEnabled'] == 1 ? 'включены' : 'отключены' ?>
        </p>
        <br>
        <p class="text-grey-darker text-base">Группы: </p>
        <?php foreach ($userGroups as $group) {?>
        <p class="text-grey-darker text-base"><?=$group['name']?></p>
        <?php }?>
    </div>
</div>
            
<?php includeTemplate('footer.php', []);?>