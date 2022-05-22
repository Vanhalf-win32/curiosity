<?php

function greeting($firstName, $secondName = 'Ivanov') {
    echo "Hello $firstName $secondName\n";
    // exit('bye' . PHP_EOL);
}
// greeting('Andrey');

/**
 * сложение двух натуральных чисел
 */
function add($a, $b) {
    return $a + $b;
}

/**
 * 
 */
function sub($a, $b) {
    return $a - $b;
}

function mult($a, $b) {
    return $a * $b;
}

function div($a, $b) {
    return $a / $b;
}

function main() {
    greeting('user');
    
    $allCommands = array ('+', '-', '*', '/', 'exit');
    
    
    while (true) {
        $command = readline('Enter commands(+,-,\,exit,*): ');
        if (!in_array($command, $allCommands)) {
            echo "invalid command\n";
            continue;
        }
        if ($command === 'exit') { 
            exit ('bye' . PHP_EOL);
        }
        
        $a1 = (int) readline('write operand one: ');
        $b1 = (int) readline('write operand two: ');

        
        if ($command === '-') {
            $c = sub($a1, $b1);
        } elseif ($command === '*') {
            $c = mult($a1, $b1);
        } elseif ($command === '/') {
            $c = div($a1, $b1);
        } elseif ($command === '+') {
            $c = add($a1, $b1);
        } else {
            $c = 'error';
        }
        
        echo '= ' . $c  . PHP_EOL . PHP_EOL;
    }
}    
main();
