<?php
require '../src/core.php';
?>

    <?php includeTemplate('header.php', ['title' => 'Контакты', 'mainTitle' => 'Контакты']); ?>
            
            <div class="space-y-4">
                <p>Телефон: 8(800)555-35-35</p>
                <p>Почта: Black@lightning.ru</p>
                <p>Адрес: г. Москва, ул. Пушника, д. Колотушкина</p>
            </div>
    <?php includeTemplate('footer.php', []);?>
