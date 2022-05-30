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

//var_dump($family);
//var_dump($memberHeight);

for ($i = 0; $i < count($family); $i = $i + 1) {
    $name = $family[$i];

    if (empty($memberHeight[$name])) {
        echo "Member $name not found\n";
        continue;
    }

    $height = $memberHeight[$name];
    echo "Member $name is $height tall\n";
}
