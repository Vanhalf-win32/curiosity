<?php
    $family = [
        'Irina',
        'Vladimir',
        'Nikita',
        'Andrey'
    ];

foreach ($family as $age => $name) {
    if ($age == 0) {
        echo 'Height : 175 - ' . ($name) . PHP_EOL;
    } elseif ($age == 1) {
        echo 'Height : 182 - ' . ($name) . PHP_EOL;
    } elseif ($age == 2) {
        echo 'Height : 178 - ' . ($name) . PHP_EOL;
    } else {
        echo 'Height : 180 - ' . ($name) . PHP_EOL;
    }
}