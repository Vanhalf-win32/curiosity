<?php

function greeting($firstName, $secondName = 'Ivanov') {
    echo "Hello $firstName $secondName\n";
}

$mathFunctions = [
    '+' => function ($a, $b) {
        return $a + $b;
    },
    '-' => function ($a, $b) {
        return $a - $b;
    },
    '*' => function ($a, $b) {
        return $a * $b;
    },
    '/' => function ($a, $b) {
        return $a / $b;
    }
];

$main = function() use($mathFunctions) {
    greeting('user');
    
    while (true) {
        $command = readline('Enter commands(+,-,\,exit,*): ');
        if (empty ($mathFunctions[$command]) && $command !== 'exit') {
            echo "invalid command\n";
            continue;
        }
        if ($command === 'exit') { 
            exit ('bye' . PHP_EOL);
        }
        
        $a1 = (int) readline('write operand one: ');
        $b1 = (int) readline('write operand two: ');
        $c = $mathFunctions[$command]($a1, $b1);
         
      
        echo '= ' . $c  . PHP_EOL . PHP_EOL;
    }
};    
$main();
