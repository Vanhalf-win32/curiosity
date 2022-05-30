<?php
    $family = [
        'Irina',
        'Vladimir',
        'Nikita',
        'Andrey'
    ];
    for ($i = 0; $i < count($family); $i = $i + 1) {
        if ($i == 0) {
        echo 'heigh : 175 -' . ($family[$i]) . PHP_EOL;
    } elseif ($i == 1) {
        echo ('heigh : 182 -') . ($family[$i]) . PHP_EOL;
    } elseif ($i == 2) {
        echo ('heigh : 178 -') . ($family[$i]) . PHP_EOL;
    } else {
        echo ('heigh : 180 -') . ($family[$i]) . PHP_EOL;
    }   
    };
    

  