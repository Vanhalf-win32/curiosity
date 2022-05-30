<?php
    $family = [
        'Irina',
        'Vladimir',
        'Nikita',
        'Andrey'
    ];
    $i = 0;
    while ($i < 4) {
        if ($i == 0) {
            echo 'Height = 175 - ' . ($family[$i]) . PHP_EOL;
        } elseif ($i == 1) {
            echo 'Height = 182 - ' . ($family[$i]) . PHP_EOL;
        } elseif ($i == 2) {
            echo 'Height = 178 - ' . ($family[$i]) . PHP_EOL;
        } else  {
            echo 'Height = 180 - ' . ($family[$i]) . PHP_EOL;
        }
        $i = $i + 1;
        
        
    };