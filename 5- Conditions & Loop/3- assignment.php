<?php

$start = 10;
$end = 0;
$stop = 3;

// Needed Output
// 10
// 09
// 08
// 07
// 06    
// 05
// 04
// 03

for( $end <= $start; ;){

    if($start != $stop-1){
        echo $start . "<br>";
        $start--;
    }else{
        break;
    };
    
};