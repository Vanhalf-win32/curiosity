<?php
$foo = 1;
while($foo <= 10) {
    echo $foo . '.';
    if ($foo < 10) {
        echo "  ";
    } else {
        echo ' ';
    } 
    
    if ($foo == 3 || $foo == 5) {
        echo PHP_EOL;
    } elseif ($foo == 8) {
        echo "Cool\n";
    } elseif ($foo == 10) {
        echo "Finish!\n";
    } else {
        echo "Hello world!\n";      
    } 
    $foo += 1;     
}
      


