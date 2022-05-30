<?php
$family = [
    'Irina',
    'Vladimir',
    'Nikita',
    'Andrey',
];

$memberHeight = [
    'Irina' => 175,
    'Vladimir' => 182,
    'Nikita' => 178,
    'Andrey' => 180,
];

$i = 0;
while ($i < count($family)) {
    $name = $family[$i];
    $height = $memberHeight[$name];

    echo "Member $name is $height tall!\n";

    $i = $i + 1;
}
