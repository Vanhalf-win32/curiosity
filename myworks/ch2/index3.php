<?php

function powerFactory($power) {
    return function($a) use($power) {
        $c = 1;
        for ($i = 0; $i < $power; $i = $i + 1) {
            $c = $c * $a;
    
        }
        return $c;
    }; 
}
$bar = readline('Enter iteger = ' ); 
$foo = powerFactory($bar);

$mathfunc = [2, 3, 4];

for ($i = 0; $i < count($mathfunc); $i++) {
    echo $i . ': ';
    echo $mathfunc[$i] . '^' . $bar . ' = ';
    echo $foo($mathfunc[$i]) . PHP_EOL;
}

echo PHP_EOL;

foreach ($mathfunc as $arrayIndex => $value) {
    echo $arrayIndex . ' : ' ;
    echo $value . '^' . $bar . ' = ';
    echo $foo($value) . PHP_EOL;
}
