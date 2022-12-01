<?php

    $en = [
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five'
    ];

    $roll = 0;
    
    do{
        $roll = rand(1, 5);
        if ($roll == 5) {
            echo "\n" . 'You win' . ' ' . $en[$roll];
        }
        else {
            echo "\n" . 'You lose' . ' ' . $en[$roll];
        }
    } while ($roll != 5);