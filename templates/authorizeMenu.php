<ul class="flex justify-center sm:justify-end items-center space-x-8 text-sm">
    <li>
        <a class="text-gray-500 hover:text-orange" href="<?=$regHrefFielf?>">
            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block text-orange h-4 w-4" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?=$regImage?>" />
            </svg>
            <?=$regField?>
        </a>
    </li>
    <li>
        <a class="text-gray-500 hover:text-orange" href="<?=$authHrefFielf?>">
            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block text-orange h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="<?=$authImage?>" clip-rule="evenodd" />
            </svg>
            <?=$authField?>
        </a>
    </li>
</ul>