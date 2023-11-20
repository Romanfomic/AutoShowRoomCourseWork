<div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-6">
    <?php
    foreach ($carArray as $carItem) {
        includeTemplate('car_item.php', [
            "name" => $carItem['name'],
            "image" => $carItem['image'],
            "price" => $carItem['price'],
            "oldPrice" => $carItem['oldPrice'],
        ]);
    }
    ?>
</div>