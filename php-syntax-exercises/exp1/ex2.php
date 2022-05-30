<?php
$foo = 1;
while ($foo <= 10) {
    echo $foo . '.';
    if ($foo < 11) {
        echo ' ';
    }
    else if ($foo == 10) {
        echo " ";
    }
    if ($foo == 5){
        echo "good\n";
    }
    elseif ($foo == 6) {
        echo "very good\n";
    } 
    else {
        echo "bad\n";
    }
    $foo++;
}