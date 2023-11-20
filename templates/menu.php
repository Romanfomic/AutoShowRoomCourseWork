<div class="border-b">
    <div class="container mx-auto overflow-hidden px-4 sm:px-6">
        <section class="bg-white py-4">
            <ul class="list-inside bullet-list-item flex flex-wrap justify-between -mx-5 -my-2">
                <?php foreach ($menuArray as $menuItem) { 
                    if ($isAuthorized || $menuItem['title'] !== 'Каталог') {
                ?>
                <li class="px-5 py-2"><a class="<?=$menuItem['class']?>" href="<?=$menuItem['path']?>"><?=$menuItem['title']?></a></li>
                <?php }} ?>
            </ul>
        </section>
    </div>
</div>
